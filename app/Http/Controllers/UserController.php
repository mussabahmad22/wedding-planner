<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Event;

class UserController extends Controller
{
    public function dashboard(Request $request){
    	$user_id = Auth::id();
        $events = Event::where('user_id', $user_id)->get();
    	return view('user.dashboard', compact('events'));
    }

    //Event Management
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
        ]);

        $user_id = Auth::id();
        
        $event = new Event();
        $event->user_id = $user_id;
        $event->name  = $request->event_name;
        $event->description = $request->description;

        $event->save();

        return redirect()->back()->with('success', 'Event Added successfully');
    }
    public function deleteEvent(Request $request){
    	 
        $user_id = Auth::id();
        $event = Event::where('user_id', $user_id)->where('id',$request->id)->first();

        if ($event) {
            $event->delete();
            return redirect()->back()->with('success', 'Event deleted successfully.');
        }else{
        	return redirect()->back()->with('error', 'Event Does not Exist. Please try again...!');
        }
    }

    public function eventUpdate(Request $request){
    	$request->validate([
            'event_name' => 'required',
            'description' => 'required',
            'event_id' => 'required'
        ]);

        $user_id = Auth::id();
        $event = Event::where('user_id', $user_id)->where('id',$request->event_id)->first();

        if ($event) {
	        $event->name = $request->event_name;
	        $event->description = $request->description;
	        $event->save();
	        return redirect()->back()->with('success', 'Event updated successfully.');
	    }else{
        	return redirect()->back()->with('error', 'Event Does not Exist. Please try again...!');
        }

    }
    //End Event Management
    //Event Properties Management
    public function propEvent(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:event,id',
            'name' => 'required',
            'description' => 'required',
            'note' => 'required'
        ]);

        $user_id = Auth::id();

        $event = Event::where('user_id', $user_id)->where('id',$request->event_id)->first();

        if ($event) {
            $event_property  = array();
            foreach ($request->name as $key => $name) {
                $array_checklist = array("name"=> $name, "descripton" => $request->description[$key], "note" => $request->note[$key]);
                array_push($event_property, $array_checklist);
            }
            if (isset($event->properties)) {
                /*if event properties already exist in DB*/
                $event_properties['checklist'] = $event_property;
            }else{
                $event_properties = array("checklist" => $event_property);
            }

            $event->properties = json_encode( $event_properties );
            $event->save();
            
            return redirect()->back()->with('success', 'Event updated successfully.');
        }else{
            return redirect()->back()->with('error', 'Event Does not Exist. Please try again...!');
        }
    }
}
