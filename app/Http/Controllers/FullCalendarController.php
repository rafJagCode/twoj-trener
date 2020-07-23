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
        if(request()->ajax()) 
        {
         $user = Auth::user();
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->where('user_id' , $user->id)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('fullcalendar');
    }
    
   
    public function create(Request $request)
    {  
        $user = Auth::user();
        $insertArr = [ 
                       'user_id' => $user->id,
                       'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $event = Event::insert($insertArr);   
        return $user;
        //return Response::json($event);
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