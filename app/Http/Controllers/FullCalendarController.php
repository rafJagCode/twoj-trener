<?php
   
namespace App\Http\Controllers;
   
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Redirect,Response;
use Auth;
   
class FullCalendarController extends Controller
{
 
    public function index()
    {
        $user = Auth::user();
        $users = User::all();

        if(request()->ajax()) 
        {     
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');    
         $data = $user->events()->whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['events.id','title','start', 'end']);
         return Response::json($data);
        }
         
        return view('fullcalendar')->with('user', $user)->with('users' , $users);
    }
    
   
    public function create(Request $request)
    {  
        $events = new Event($request->all());
        $user = Auth::user();

 
        $events->user_id = $user->id;
        $events->save();
        $events->users()->attach($user->id);
        $events->users()->attach($request->input('users'));

        return Response::json($events);
    }
     
 
    public function update(Request $request)
    {   
        $user = Auth::user();
        $editevent = Event::findOrFail($request->id);
        $editevent->update($request->all());
        $editevent->users()->sync($request->input('users'));
        $editevent->users()->attach($user->id);
        return Response::json($editevent);

    } 
 
 

    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->deleteEventId)->delete();
   
        return Response::json($event);
    }
    public function leave(Request $request)
    {
        $user = Auth::user();
        $event = Event::findOrFail($request->leaveEventId);
        $event ->users()->detach($user->id);
   
        return Response::json($event);
    }
    
    public function edit(Request $request)
    {
        $editevent = Event::findOrFail($request->id);
        $users=$editevent->users()->get(['users.id']);
        return Response::json(array('event'=>$editevent , 'users'=>$users)); 
    }   
}