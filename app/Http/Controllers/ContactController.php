<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'company' => 'nullable|string|max:255',
                'message' => 'required|string',
            ]);

            // Simpan ke database
            Message::create($validated);

            return redirect()->back()->with('success', 'Your message has been sent successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to send your message. Please try again.');
        }
    }

}
