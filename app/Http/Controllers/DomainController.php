<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\template;
use App\Models\subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    $validated = $request->validate([
        'domain' => 'required|string',
        'template' => 'required|exists:templates,id',
        'nik' => 'required',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone_number' => 'required',
        'status' => 'required|in:Paying,Developing,Online,Renewing,Offline', 
        'subscription' => 'required|exists:subscriptions,id',       
        'initial_domain_cost' => 'nullable|numeric',
        'renewal_cost' => 'nullable|numeric',
        'hosting_cost' => 'nullable|numeric',
        'total_payment' => 'nullable|numeric',
        'ktp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'siup' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'npwp' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
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

    // Save order to database
    order::create($validated);

    return redirect('/#home')->with('success', 'Your order has been submitted successfully!');
}



}
