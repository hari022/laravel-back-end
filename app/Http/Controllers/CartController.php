<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\CartEvent;

class CartController extends Controller
{
    public function getCart()
    {
        $events = CartEvent::all();
        $response = [
            'events'=>$events

        ];
         return response()->json($response,200); //Get data from cart
        //return "data from cart";
    }

    public function addToCart($id)
    {
        $event_id;
        $name;
        $description;
        $price;
        $plan;
        $event_date;

        $event = Event::where('id', $id)->get();
        //return response()->json($response,200);
       // $event = json_decode($event);
      // return $event;
        foreach($event as $obj){
             $event_id = $obj->id;
             $name = $obj->name;
             $description = $obj->description;
             $plan = $obj->plan;
             $price = $obj->price;
             $event_date = $obj->event_date;
             
        }
        $cart = new CartEvent;
        $cart->event_id = $event_id;
        $cart->name = $name;
        $cart->description = $description;
        $cart->price = $price;
        $cart->plan = $plan;
        $cart->event_date = $event_date;
        if($cart->save()){
            return "Success";
        }else{
            return "False";
        }

        

        //return $price;
        
    }

    public function deleteEvent($id)
    {
        $event = CartEvent::where('event_id', $id)->first();
        if($event->delete()){
            return "Success";
        }else{
            return "False";
        }
    }
}
