<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tweet;

class IndexController extends Controller
{
    public function index() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('index', compact('contact', 'tweet'));
    }
}
