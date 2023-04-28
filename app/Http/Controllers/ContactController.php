<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactForm(ContactRequest $request)
    {

        Contact::create($request->all());
        // Send the email
        // Mail::send('info@ednadent.com', [
        //     'name' => $validatedData['name'],
        //     'email' => $validatedData['email'],
        //     'message' => $validatedData['message'],
        // ], function ($mail) use ($validatedData) {
        //     $mail->to('you@example.com')
        //         ->subject('New Contact Form Submission from ' . $validatedData['name']);
        // });

        // Redirect back with success message
        return "Thank you for contacting us!";
    }
}