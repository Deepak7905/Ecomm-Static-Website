<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Exception;


class ContactController extends Controller
{

    // contact emial view
    // public function contactEmail(Request $request) {
    //     return view('front.emails.contact');

    // }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'email'     => 'required|email',
            'phonenumber' => 'required|string|max:20',
            'address'   => 'nullable|string',
        ]);
    
        try {
            $emailData = [
                'first_name' => $validatedData['firstname'],
                'last_name' => $validatedData['lastname'],
                'email' => $validatedData['email'],
                'phone_number' => $validatedData['phonenumber'],
                'user_message' => $validatedData['address'],  // Changed from 'message' to 'user_message'
            ];
            
    
            Mail::send('front.emails.contact', $emailData, function ($message) use ($validatedData) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                       ->to('dp7905639519@gmail.com')
                       ->subject('New Contact Form Submission');
            });
    
            return back()->with('success', 'Your message has been sent successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
    
}
