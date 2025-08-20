<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:20',
            'message' => 'nullable|max:1000'
        ]);

        ContactForm::create($validated);

        return redirect()->route('thank-you')->with('success', 'Terima kasih! Kami akan menghubungi Anda segera.');
    }
}