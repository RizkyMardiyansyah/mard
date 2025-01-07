<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainController extends Controller
{
    public function index(Request $request)
{   
    $search = $request->input('search');
    $type = $request->input('type', 'all'); // Default 'all' jika tidak ada parameter 'type'

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

    // Menentukan view yang akan ditampilkan berdasarkan rute
    
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
        'nik' => 'required',
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone_number' => 'required',
        'domain' => 'required|string',
        'template' => 'required|exists:templates,id',
        'status' => 'required|in:Paying,Developing,Online,Renewing,Offline',
    ]);

    // Simpan order ke database (contoh implementasi)
    order::create($validated);

    return redirect()->back()->with('success', 'Your order has been submitted successfully!');
}

}
