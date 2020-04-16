<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tweet;

class CausesController extends Controller
{
    public function index() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('causes', compact('contact', 'tweet'));
    }
    public function indexSingle() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('causes-single', compact('contact', 'tweet'));
    }
}
