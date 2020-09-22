<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Message;
use App\Events\NewMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function get(){
        // $contacts = User::where('id', '!=', auth()->id())->get();
        $contactsIds = Auth::user()->contacts->pluck('contact_id')->all();
        $contacts = User::whereIn('id', $contactsIds)->get();

        
        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('is_read', 0)
            ->groupBy('from')
            ->get();

        $contact = $contacts->map(function($contact) use ($unreadIds){
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;
            return $contact;
        });
        return response()->json($contacts);
    }
    public function getMessagesFor($id)
    {
        Message::where('from', $id)->where('to', auth()->id())->update(['is_read'=>1]);
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
    public function addContact(Request $request)
    {
        $contact = Contact::where('contact_id', $request->contact_id)->where('user_id', auth()->id())->get();
        if($contact->isNotEmpty()){
            $data = ['already_added'=>true];
            return response()->json($data);
        }

        $contact = new Contact();
        $contact->contact_id=$request->contact_id;
        Auth::user()->contacts()->save($contact);

        $addedUser=User::where('id', $request->contact_id)->get()->first();
        return response()->json($addedUser);
    }
    public function removeContact(Request $request)
    {
        $contact = Contact::where('contact_id', $request->contact_id)->where('user_id', auth()->id())->delete();
        $removedUser=User::where('id', $request->contact_id)->get()->first();
        return response()->json($removedUser);
    }
    public function searchNewContact($searchedTerm)
    {
        $searchingResults = User::query()
            ->where('firstName', 'LIKE', "%{$searchedTerm}%")
            ->orWhere('secondName', 'LIKE', "%{$searchedTerm}%") 
            ->orWhere('email', 'LIKE', "%{$searchedTerm}%")
            ->get();
        return response()->json($searchingResults);
    }
}
