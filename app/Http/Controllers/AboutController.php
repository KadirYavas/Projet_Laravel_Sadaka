<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Tweet;

class AboutController extends Controller
{
    public function index() {
        $about = About::all();
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('about', compact('about', 'contact', 'tweet'));
    }
    public function indexBDD() {
        $about = About::all();
        return view('about/bddAbout', compact('about'));
    }
    public function create()
    {
        $about = About::all();
        return view('about/ajoutAbout', compact('about'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'texte' => 'required|max:3000|min:4',
        ]);

        $about = new About();
        $about->texte = $request->input('texte');
        $about->save();

        return redirect()->route('about');
    }
    // public function show($id)
    // {
    //     $this->authorize('view', Pokemon::class);
    //     $pokemon = Pokemon::all()->where('id', $id);
    //     return view('showPokemon', compact('pokemon'));
    // }
    public function edit($id)
    {
        $about = About::find($id);
        return view('about/editAbout', compact('about'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'texte' => 'required|max:3000|min:4',
        ]);

        $about = About::find($id);
        $about->texte = $request->input('texte');

        $about->save();

        return redirect()->route('about');
    }
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('about');
    }
}
