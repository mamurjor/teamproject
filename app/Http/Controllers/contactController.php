<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function contact(Request $request) {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'Message' => 'required|string|max:1000',
        ]);

        // Retrieve the form data
        $name = $request->name;
        $email = $request->email;
        $message = $request->Message;

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


}
