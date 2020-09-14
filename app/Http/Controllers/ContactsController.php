<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\NewMessage;
use Illuminate\Support\Facades\Log;

class ContactsController extends Controller
{
    public function get(){
        $contacts = User::where('id', '<', 4)->where('id', '!=', auth()->id())->get();
        return response()->json($contacts);
    }
    public function getMessagesFor($id)
    {
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();
        return response()->json($messages);
    }
    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to' => $request->contact_id,
            'message'=> $request->message,
            'is_read' => 0
        ]);
        broadcast(new NewMessage($message));

        return response()->json($message);
    }
}
