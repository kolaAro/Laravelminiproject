<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function create () {
      return view ('contact');
    }
    public function store (Request $request){
      $this->validate($request,[
      'name'=>'required',
      'email'=>'required|email',
      'message'=>'required'
    ]);
    Mail::send('email.contact-message',[                 //send the email from email.contact-message
            'msg'=>$request->message
          ],function($mail) use($request){
                                                         //request for the message
          $mail->from($request->email, $request->name);   //request for the name and emailof the sender
          $mail->to('john@example.com')->subject('contact us');      //to this admin or owner of the website thisis
  });
  return redirect()->back()->with('flash_message','Thank you for your message');
    }
}
