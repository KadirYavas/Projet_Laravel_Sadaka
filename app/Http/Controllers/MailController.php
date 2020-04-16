<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;

class MailController extends Controller
{
    public function store(Request $request){
        
        $name = $request->input('name');
        
        $email =  $request->input('email');

        $message = $request->input('message');

        Mail::to($email)->send(new MessageMail($name, $email, $message));

        return redirect()->back();
    }
}
