<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'details'=>$request->details,
            'number'=>$request->number,
            'email'=>$request->email,
            'bodyMessage'=>$request->message,
            'receiverEmail'=>$request->receiver_email
        ];
        Mail::send('emails.for_trainer', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['receiverEmail']);
            $message->subject('Wiadomość z TwójTrener');
        });
        return response()->json($data);
    }
}
