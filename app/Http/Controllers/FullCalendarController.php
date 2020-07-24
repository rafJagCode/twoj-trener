<?php
   
namespace App\Http\Controllers;
   
use App\Models\Event;
use Illuminate\Http\Request;
use Redirect,Response;
use Auth;
   
class FullCalendarController extends Controller
{
 
    public function index()
    {
        $user = Auth::user();
        if(request()->ajax()) 
        {
         
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id' , $user->id)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
         
          return view('fullcalendar')->with('user', $user);
    }
    
   
    public function create(Request $request)
    {  
        $events = new Event($request->all());
        $user = Auth::user();
        $insertArr = [ 
                       'user_id' => $user->id,
                       'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end,
                       'description' => $request->description
                    ];
        //$event = Event::insert($insertArr);   
        
       
        $events->user_id = $user->id;
        $events->save();
        $events->users()->attach($user->id);
        return Response::json($events);
        //return back()->withInput();
        //return view('fullcalendar')->with('user', $user);
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return Response::json($event);
    } 
 
 
    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
   
        return Response::json($event);
    }    
 
 
}