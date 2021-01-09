<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email'=> 'required|email',
            'subject'=>'required',
            'message'=>'required'
            //'checkbox'=>'required'
        ]);

        $data =array(
            'name' =>$request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'message' =>$request->message,
        );

        Mail::to('info@grimbergenmotors.be')->send(new  SendMail($data));

        return back()->with('succes','Thank you for contacting use, your mail has been send');

    }
}
