<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactMail extends Controller
{

    public function sendEmail(Request $request)
    {
        // İletişim formundan gelen verileri al
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        // E-posta gönderimi
        Mail::to('ayse0025turan@gmail.com')->send(new ContactFormMail($data));

        return redirect()->route("/anasayfa");
    }

}
