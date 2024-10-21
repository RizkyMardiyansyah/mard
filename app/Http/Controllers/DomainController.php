<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Template; // Pastikan model Template sudah ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainController extends Controller
{
    public function index(Request $request)
{
    // Mengambil query pencarian dari request
    $search = $request->input('search');
    



    // Mengambil template dari database dengan pagination dan pencarian berdasarkan judul
    $templates = Template::when($search, function ($query) use ($search) {
        return $query->where('title', 'like', "%{$search}%");
    })->paginate(10); // 10 template per halaman
    if ($request->ajax()) {
        // Kembalikan data dalam format JSON
        return response()->json([
            'templates' => $templates->items(), // Ambil item untuk ditampilkan
            'pagination' => (string) $templates->links() // Mengembalikan pagination
        ]);
    }

    return view('domain-check', compact('templates', 'search'));
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
        'status' => 'required|in:Pending Payment,In Progress,Active,Pending Renewal',
    ]);

    // Simpan order ke database (contoh implementasi)
    order::create($validated);

    return redirect()->back()->with('success', 'Your order has been submitted successfully!');
}

}
