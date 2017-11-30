<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function getEvents($plan)
    {

        //Fetch data according to the plan
        $events = Event::all();
        $response = [
            'events'=>$events

        ];
         return response()->json($response,200);
        //return $plan;
    }

    public function getEventsByDate($plan, $date)
    {
        $time = strtotime($date);
        
        $newformat = date('Y-m-d',$time);

        //return $newformat;
        //Fetch data according to the plan and date
        $events = DB::table('events')->where('event_date', $newformat)->get();
        $response = [
           'events'=>$events

        ];
         return response()->json($response,200);
    }


}
