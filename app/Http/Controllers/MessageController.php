<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class MessageController extends Controller
{
    public function index()
    {
        //wybierz wszystkich użytkowników oprócz zalogowanego użytkownika
        //$users = User::where('id', '!=', Auth::id())->get();

        //oblicz ile wiadomości jest nieprzeczytanych od wybranego użytkownika
        /*$users = DB::select("select users.id, users.name, users.avatar, users.email, count(is_read) as unread 
        from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
        where users.id != " . Auth::id() . " 
        group by users.id, users.name, users.avatar, users.email");*/
        return view('message');
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        //Wlacz wszystkie nieprzeczytane wiadomości
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        //Uzyskaj wszystkie wiadomości od wybranego użytkownika
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; //wiadomość będzie nieprzeczytana podczas wysyłania wiadomości
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap2',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
