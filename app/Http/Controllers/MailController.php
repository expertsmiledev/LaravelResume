<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
      public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('tuasmile1213@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }


  /*  public function index()
    {
        $info = array(
            'name' => "Alex"
        );
        Mail::send(['text' => 'emails.demoMaill'], $info, function ($message)
        {
            $message->to('tuasmile1213@gmail.com', 'W3SCHOOLS')
                ->subject('Basic test eMail from W3schools.');
            $message->from('romansymanski1213@gmail.com', 'Alex');
        });
        echo "Successfully sent the email";
    }*/
}
