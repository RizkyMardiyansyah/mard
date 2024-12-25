<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Menyimpan data ke database
        Message::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'company' => $validated['company'],
            'message' => $validated['message'],
        ]);

        // Mengirim response sukses dalam format JSON
        return response()->json(['success' => true]);
    }
}
