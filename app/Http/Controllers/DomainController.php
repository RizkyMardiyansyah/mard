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
    $search = $request->input('search');
    $type = $request->input('type', 'all'); 

    // Cek apakah ada pencarian
    if ($search) {
        $templates = Template::where('title', 'LIKE', "%{$search}%")
                             ->paginate(9); // Sesuaikan jumlah per halaman
    }
    // Cek apakah ada tipe selain 'all'
    else if ($type != 'all') {
        $templates = Template::where('type', 'LIKE', "%{$type}%")
                             ->paginate(9); // Sesuaikan jumlah per halaman
    } else {
        // Default jika tidak ada pencarian dan tipe 'all'
        $templates = Template::paginate(9); 
    }

    // Mengecek apakah request menggunakan ajax
    if ($request->ajax()) {
        return response()->json([
            'templates' => $templates->items(),
            'pagination' => (string) $templates->links('pagination::bootstrap-4')
        ]);
    }


    // subscriptions
    $subs= subscription::all();


    // Menentukan view yang akan ditampilkan berdasarkan rute
    
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
        // dd($request);
        $data = $request->all(); // Mengambil semua data dari request

        $order=Order::create([
            'domain' => $data['domain'],
            'template' => $data['template'],
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
            'ktp' => $request->file('ktp') ? $request->file('ktp')->store('documents') : null,
            'siup' => $request->file('siup') ? $request->file('siup')->store('documents') : null,
            'npwp' => $request->file('npwp') ? $request->file('npwp')->store('documents') : null,
        ]);

        // Handle file uploads
        if ($request->hasFile('ktp') && $request->file('ktp')->isValid()) {
            // Simpan di public folder tanpa subfolder
            $validated['ktp'] = $request->file('ktp')->store('ktp_' . time(), 'public');
        }

        if ($request->hasFile('siup') && $request->file('siup')->isValid()) {
            // Simpan di public folder tanpa subfolder
            $validated['siup'] = $request->file('siup')->store('siup_' . time(), 'public');
        }

        if ($request->hasFile('npwp') && $request->file('npwp')->isValid()) {
            // Simpan di public folder tanpa subfolder
            $validated['npwp'] = $request->file('npwp')->store('npwp_' . time(), 'public');
        }

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey =config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized =true;
       \Midtrans\Config::$is3ds = true;        
        

        $params = array(
            'transaction_details' => array(
                'order_id' => 'order_' . rand(),
                'gross_amount' => $data['total_payment'],
            ),
            'customer_details' => array(
                'first_name' => $data['name'],
                'email' => $data['email'],
            )
        );
        
        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);
    
            $order->update(['snapKey' => $snapToken]);

            $subs = subscription::where ('id', $data['subscription'])->first();
            $template = template::where ('id', $data['template'])->first();
            $kop = public_path('img/kop.png');
            

            Mail::to($data['email'])->send(new orderMail($data, $snapToken, $subs, $template, $kop));
    
            return redirect()->route('payment', ['snapKey' => $snapToken]);
    
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    
    // Controller untuk menampilkan view payment.blade
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
