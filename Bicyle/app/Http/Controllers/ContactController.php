<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobs\ContactUsJob;
use App\Mail\ContactUs;
use App\Mail\Enquiry;
use App\Models\Message as ModelsMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message; // Đúng namespace cho Message

class ContactController extends Controller
{
    public function send() {
    Mail::to('duongthang1071977@gmail.com')->send(new ContactUs());
    return 'Email has been sent!';
    }

    public function show() {
        return view ('bicycle.contact');
    }

    public function sendEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
            'phone' => 'required|min:5'
        ]);
        ModelsMessage::create($data);
        // dd('ok');
        // dd('Mail sent!');
        // Mail::to($data['email'])->send(new Enquiry($data));
        $job = (new ContactUsJob($data));
        dispatch($job);
        return redirect()->back()->with('success', 'Message sent succcessfully');
    }

    public function sendNew(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);
        ModelsMessage::create($data);
        $job = (new ContactUsJob($data));
        dispatch($job);
        return redirect()->back()->with('success', 'Message sent succcessfully');
    }

}
