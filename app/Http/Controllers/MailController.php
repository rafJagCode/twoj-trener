<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
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
            'receiver'=>$request->receiver
        ];
        Log::debug($data['receiver']['email']);
        Mail::send('emails.for_trainer', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to($data['receiver']['email']);
            $message->subject('Wiadomość z TwójTrener');
        });
        return response()->json($data);
    }
}
