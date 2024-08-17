<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $rules = [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'mail' => 'required|email',
            'phone' => 'required',
            'looking' => 'required',
            'optradio' => 'required',
            'msg' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
        $data=[
            "fname"=>$request->post('fname'),
            "lname"=>$request->post('lname'),
            "mail"=>$request->post('mail'),
            "phone"=>$request->post('phone'),
            "looking"=>$request->post('looking'),
            "optradio"=>$request->post('optradio'),
            "msg"=>$request->post('msg'),
        ];
        $recipient = 'dev@geekletters.com';
        $subject = 'Laxmi Eye Appointment';

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)
                    ->subject($subject);
        });

        return redirect()->back()->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";
    }
}