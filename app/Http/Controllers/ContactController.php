<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submit(ContactFormRequest $request)
    {
        Log::info('Contact form submission:', $request->validated());
        Contact::create($request->validated());
        Session::flash('success', 'Your message has been sent successfully!');
        return redirect()->route('confirmation', $request->validated());
    }

    public function showConfirmation(Request $request)
    {
        return view('confirmation', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
    }
}
