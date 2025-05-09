<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'contact-phone' => 'nullable|string|max:15',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Logic for handling the form (e.g., send email, save to database, etc.)
        // For example, sending an email:
        \Mail::to('webmaster@example.com')->send(new \App\Mail\ContactFormMail($validatedData));

        // After the form is processed, redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}

