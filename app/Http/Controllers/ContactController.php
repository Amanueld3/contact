<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(ContactRequest $request)
    {
        // $adminEmail = "info@ednadent.com";
        // Mail::to($adminEmail)->send(new ContactMail($item));

        Contact::create($request->all());
        // Send the email
        // Mail::send('info@ednadent.com', [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'message' => $request->message,
        // ], function ($mail) use ($request) {
        //     $mail->to('you@example.com')
        //         ->subject('New Contact Form Submission from ' . $request->name);
        // });

        // Redirect back with success message
        return "Thank you for contacting us!";
    }
}
