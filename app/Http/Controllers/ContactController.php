<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tweet;

class ContactController extends Controller
{
    public function index() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('contact', compact('contact', 'tweet'));
    }
    public function indexBDD() {
        $contact = Contact::all();
        return view('contact/bddAbout', compact('contact'));
    }
    public function create()
    {
        $contact = Contact::all();
        return view('contact/ajoutAbout', compact('contact'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'texte' => 'required|max:3000|min:4',
        ]);

        $contact = new Contact();
        $contact->texte = $request->input('texte');
        $contact->save();

        return redirect()->route('contact');
    }
    // public function show($id)
    // {
    //     $this->authorize('view', Pokemon::class);
    //     $pokemon = Pokemon::all()->where('id', $id);
    //     return view('showPokemon', compact('pokemon'));
    // }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact/editAbout', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'texte' => 'required|max:3000|min:4',
        ]);

        $contact = Contact::find($id);
        $contact->texte = $request->input('titre');

        $contact->save();

        return redirect()->route('contact');
    }
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact');
    }
}
