<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email
        Mail::raw('', function ($message) use ($validatedData) {
            $message->to('your-email@example.com')
                ->subject($validatedData['subject'])
                ->from($validatedData['email'], $validatedData['name'])
                ->html($validatedData['message']);
        });

        // Store a message in session
        Session::flash('message', 'Your message has been sent successfully!');

        // Redirect back to the contact form
        return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
    }
}