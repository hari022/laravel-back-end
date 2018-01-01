<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
   public $email;
    public function sendEmail(Request $request)
    {
        $title = "Booking Confirm";
        $person_allowed = $request->input('number');
        $plan = $request->input('plan');
        $this->email = $request->input('email');
       // $content = $request->input('content');
       $number = rand(10000,90000);

        Mail::send('send', ['title' => $title, 'content' => "you have selected $plan and Your ticket number is $number. You dont need to print this. Just show this at the check in counter. Number of person allowed with this code are/is $person_allowed."], function ($message)
        {

            $message->from('me@gmail.com', 'Hari');

            $message->to($this->email);

        });

    

        return response()->json(['message' => 'Request completed']);
    }
}
