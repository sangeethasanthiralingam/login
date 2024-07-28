<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the feedback (e.g., save to database, send email, etc.)
        // Example: Log the feedback for now (you can implement database or email functionality as needed)
        // \Log::info('Feedback received:', $request->all());

        // Flash a success message to the session
        Session::flash('message', 'Your feedback has been sent successfully!');

        // Redirect back to the feedback page or home page
        return redirect()->route('home');
    }
}
