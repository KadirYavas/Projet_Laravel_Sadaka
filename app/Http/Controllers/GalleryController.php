<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallerie;
use App\Contact;
use App\Tweet;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('gallery', compact('contact', 'tweet'));
    }
    public function indexBDD() {
        $gallery = Gallerie::all();
        return view('photo/bddPhoto', compact('gallery'));
    }
    public function create()
    {
        $gallery = Gallerie::all();
        return view('photo/ajoutPhoto', compact('gallery'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:30|min:4',
            'photo' => 'required|file',
        ]);

        $image = Storage::disk('public')->put('', $request->file('photo'));

        $gallery = new Gallerie();
        $gallery->titre = $request->input('titre');
        $gallery->photo = $image;
        $gallery->save();

        return redirect()->route('gallery');
    }
    // public function show($id)
    // {
    //     $this->authorize('view', Pokemon::class);
    //     $pokemon = Pokemon::all()->where('id', $id);
    //     return view('showPokemon', compact('pokemon'));
    // }
    public function edit($id)
    {
        $gallery = Gallerie::find($id);
        return view('photo/editPhoto', compact('gallery'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|max:30|min:4',
            'photo' => 'required|file',
        ]);

        $image = Storage::disk('public')->put('', $request->file('photo'));

        $gallery = Gallerie::find($id);
        $gallery->titre = $request->input('titre');
        $gallery->photo = $image;

        $gallery->save();

        return redirect()->route('gallery');
    }
    public function destroy($id)
    {
        $gallery = Gallerie::find($id);
        $gallery->delete();
        return redirect()->route('gallery');
    }
}
