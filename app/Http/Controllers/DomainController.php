<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\template;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\ExampleMail;
use App\Mail\orderMail;
use Illuminate\Support\Facades\Mail;

class DomainController extends Controller
{
    public function index(Request $request)
{   
    if ($request->is('website')){
        $pagination=10;
    }
    else{
        $pagination=9;
    }
    $search = $request->input('search');
    $type = $request->input('type', 'all'); 
    $category = $request->input('category', 'all'); 

    if ($search) {
        $templates = Template::where('title', 'LIKE', "%{$search}%")
                            ->orderBy('purchases', 'desc')
                            ->paginate($pagination);
    }
   
    else if ($type != 'all') {
        $templates = Template::where('type', 'LIKE', "%{$type}%")
                            ->orderBy('purchases', 'desc')                     
                            ->paginate($pagination);
    } 
    else {
    
        $templates = Template::orderBy('purchases', 'desc')
                         ->paginate($pagination); 
    }
    
      
    if ($request->ajax()) {
        return response()->json([
            'templates' => $templates->items(),
            'pagination' => (string) $templates->links('pagination::bootstrap-4')
        ]);
    }


    
    $subs= subscription::all();

    


    if ($request->is('website')) {

        return view('domainTemplate', compact('templates', 'search', 'type'));
    }
    if ($request->is('subscription')) {
        return view('subscription', compact('subs'));
    }
    if ($request->is('cart')) {
        return view('cart', compact('templates', 'search', 'type'));
    }
    if ($request->is('/')) {
        return view('home', compact('templates', 'search', 'type'));
    }

    return view('domain-check', compact('templates', 'search', 'type'));

    
}

public function template()
{  
    $templates = Template::all();
    return response()->json([
        'success' => true,
        'templates' => $templates
    ]);     
}





    public function checkDomain(Request $request)
    {
        $domainName = preg_replace('/\.[a-zA-Z]+$/', '', $request->domain);
        $results = [];

        // Cek domain .com menggunakan API baru
        $comUrl = "https://web-cms.biznetgio.com/domain-checker/$domainName.com";
        $comResponse = Http::get($comUrl)->json(); // Decode JSON response to an array

        if (isset($comResponse['status']) && $comResponse['status'] == 1) {
            $results['com'] = 'available';
        } else {
            $results['com'] = 'unavailable';
        }

        // Cek domain .id menggunakan RDAP PANDI
        $idUrl = "https://rdap.pandi.id/rdap/domain/$domainName.id";
        $idResponse = Http::get($idUrl);
        if ($idResponse->status() == 404) {
            $results['id'] = 'available';
        } else {
            $results['id'] = 'unavailable';
        }

        // Cek domain .co.id menggunakan RDAP PANDI
        $coIdUrl = "https://rdap.pandi.id/rdap/domain/$domainName.co.id";
        $coIdResponse = Http::get($coIdUrl);
        if ($coIdResponse->status() == 404) {
            $results['co.id'] = 'available';
        } else {
            $results['co.id'] = 'unavailable';
        }

        return response()->json($results);
    }

    public function store(Request $request)
    {
        $data = $request->except(['ktp', 'siup', 'npwp']);
        $timestamp = date('ymdHi');
        $orderId = 'OD' . $timestamp . rand(100, 999);

        $files = ['ktp', 'siup', 'npwp'];
        $uploadedFiles = [];

        foreach ($files as $file) {
            if ($request->hasFile($file) && $request->file($file)->isValid()) {
                $filename = $request->file($file)->hashName();
                $request->file($file)->move(storage_path('app/public'), $filename);
                $uploadedFiles[$file] = $filename;
            } else {
                $uploadedFiles[$file] = null;
            }
        }
        
        // Buat Order
        $order = Order::create([
            'orderId' => $orderId,
            'domain' => $data['domain'],
            'template' => $data['template'],
            'referal' => $data['referal'],
            'nik' => $data['nik'],
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'status' => $data['status'],
            'subscription' => $data['subscription'],
            'domainCost' => $data['domainCost'] ?? 0,
            'templateCost' => $data['templateCost'] ?? 0,
            'subscriptionCost' => $data['subscriptionCost'] ?? 0,
            'total_payment' => $data['total_payment'] ?? 0,
            'ktp' => $uploadedFiles['ktp'],
            'siup' => $uploadedFiles['siup'],
            'npwp' => $uploadedFiles['npwp'],
        ]);


        $template = Template::find($order->template);
        $template->update(['purchases' => $template->purchases + 1]);
        $subs = Subscription::find($order->subscription);

        // Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $data['total_payment'],
            ],
            'customer_details' => [
                'first_name' => $data['name'],
                'email' => $data['email'],
                'phone' => $data['phone_number'],
            ],
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            $order->update(['snapKey' => $snapToken]);
           
            Mail::to($data['email'])->queue(new orderMail($data, $snapToken, $subs, $template, $order));

            return redirect()->route('payment', ['snapKey' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    public function payment($snapKey)
    {
        // Ambil data berdasarkan snapKey
        $order = Order::where('snapKey', $snapKey)->firstOrFail();
    
        return view('payment', [
            'order' => $order,
            'snapKey' => $snapKey,
        ]);
    }

    
}
