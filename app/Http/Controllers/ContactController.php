<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsEmail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        // $validatedData = $request->validate([
        //     'fullname'  => 'required|string|max:255',
        //     'email'     => 'required|email',
        //     'subject'   => 'required|string',
        //     'message'   => 'required|string',
        // ]);
        try {
            $validatedData = $request->validate([
                'fullname'  => [
                    'required',         // The field is mandatory
                    'string',           // Must be a string
                    'max:255',          // Maximum length of 255 characters
                    'min:3',            // Minimum length of 3 characters
                    'regex:/^[a-zA-Z\s]+$/',  // Only alphabets and spaces allowed
                ],
                'email'     => [
                    'required',         // The field is mandatory
                    'email',            // Must be a valid email address
                    'max:255',          // Maximum length of 255 characters
                    'unique:users,email', // Email must be unique in the 'users' table (optional if applicable)
                    'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',  // Custom email regex
                ],
                'subject'   => [
                    'required',         // The field is mandatory
                    'string',           // Must be a string
                    'max:150',          // Maximum length of 100 characters
                    'min:5',            // Minimum length of 5 characters
                ],
                'message'   => [
                    'required',         // The field is mandatory
                    'string',           // Must be a string
                    'max:1000',         // Maximum length of 1000 characters
                    'min:10',           // Minimum length of 10 characters
                ],
            ]);
        } catch (ValidationException $e) {
            // Handle validation failure
    
            // Redirect back with errors and old input data
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        }
        
        if (isset($validatedData['fullname'])) {
            $validatedData['name'] = $validatedData['fullname'];
            unset($validatedData['fullname']);
        }
        
        $response = Mail::to(['gourav.luv21@gmail.com','Info@airportlimoindy.com','pardeepbasson@gmail.com', $validatedData['email']])->send(new ContactUsEmail($validatedData));

        $contact = Contact::create($validatedData);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

