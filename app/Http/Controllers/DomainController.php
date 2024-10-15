<?php

namespace App\Http\Controllers;

use App\Models\Template; // Pastikan model Template sudah ada
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainController extends Controller
{
    public function index()
    {
        // Mengambil semua template dari database
        $templates = Template::all();

        return view('domain-check', compact('templates'));
    }

    public function checkDomain(Request $request)
    {
        $domainName = preg_replace('/\.[a-zA-Z]+$/', '', $request->domain);
        $results = [];

        // Cek domain .com menggunakan API baru
        $comUrl = "https://who-dat.as93.net/$domainName.com";
        $comResponse = Http::get($comUrl);

        if (str_contains($comResponse->body(), 'whoisparser: domain is not found')) {
            $results['com'] = 'Domain tersedia';
        } else {
            $results['com'] = 'Domain tidak tersedia';
        }

        // Cek domain .id menggunakan RDAP PANDI
        $idUrl = "https://rdap.pandi.id/rdap/domain/$domainName.id";
        $idResponse = Http::get($idUrl);
        if ($idResponse->status() == 404) {
            $results['id'] = 'Domain tersedia';
        } else {
            $results['id'] = 'Domain tidak tersedia';
        }

        // Cek domain .co.id menggunakan RDAP PANDI
        $coIdUrl = "https://rdap.pandi.id/rdap/domain/$domainName.co.id";
        $coIdResponse = Http::get($coIdUrl);
        if ($coIdResponse->status() == 404) {
            $results['co.id'] = 'Domain tersedia';
        } else {
            $results['co.id'] = 'Domain tidak tersedia';
        }

        return response()->json($results);
    }
}
