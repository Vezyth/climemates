<?php

namespace App\Http\Controllers;

use App\Mail\BusinessEmail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function business(){
        return view('business');
    }
    public function sendBusiness(Request $request){

        $details = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'bname' => $request->bname,
            'phone' => $request->phone,
            'btype' => $request->btype,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zcode' => $request->zcode,
            'message' => $request->message,
        ];

        Mail::to('juliuskevinr12@gmail.com')->send(new BusinessEmail($details));
        return back()->with("message_sent",'your message has been sent succesfully');
    }

    public function contact(){
        return view('contact');
    }

    public function sendContact(Request $request){

        $cdetails = [
            'cname' => $request->cname,
            'cphone' => $request->cphone,
            'cemail' => $request->cemail,
            'cpref' => $request->cpref,
            'csubject' => $request->csubject,
            'cmessage' => $request->cmessage,
        ];

        Mail::to('juliuskevinr12@gmail.com')->send(new ContactMail($cdetails));
        return back()->with("cmessage_sent",'your message has been sent succesfully');
    }


}
