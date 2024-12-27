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
    $templates = template::where('title', 'LIKE', "%{$search}%")
                        ->paginate(9); // Sesuaikan jumlah per halaman

    if ($request->ajax()) {
        return response()->json([
            'templates' => $templates->items(),
            'pagination' => (string) $templates->links('pagination::bootstrap-4')
        ]);
    }

   return view('domain-check', compact('templates', 'search'));
   return view('home', compact('templates', 'search'));
}




    public function checkDomain(Request $request)
    {
        $domainName = preg_replace('/\.[a-zA-Z]+$/', '', $request->domain);
        $results = [];

        // Cek domain .com menggunakan API baru
        $comUrl = "https://who-dat.as93.net/$domainName.com";
        $comResponse = Http::get($comUrl);

        if (str_contains($comResponse->body(), 'whoisparser: domain is not found')) {
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
