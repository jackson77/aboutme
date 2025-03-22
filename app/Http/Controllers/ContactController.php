<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function show() {
        return view('contact');
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        Mail::send('emails.contact', [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->message,
        ], function ($message) use ($request) {
            $message->to('your@email.com')
                    ->subject('New Contact Message from ' . $request->name);
        });

        return back()->with('success', 'Your message has been sent!');
    }
}


