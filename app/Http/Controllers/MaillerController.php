<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Validation\Validator;
class MaillerController extends Controller
{
    public function sendMail(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
           'content'=>'required'
        ]);

        $mail = new ContactMail(
            $request->input('subject'),
            $request->input('content'),
            $request->input('email')
        );

        Mail::to('anhnhps09887@fpt.edu.vn')->send($mail);

        return redirect()->back()->with('success', 'Email sent successfully')->with('success', 'Message sent successfully');
    }
}
