<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Tweet;
use App\Cause;

class CausesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index', 'indexSingle');
    }
    public function index() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        $cause = Cause::all();
        return view('causes', compact('contact', 'tweet', 'cause'));
    }
    public function indexSingle() {
        $contact = Contact::all();
        $tweet = Tweet::orderBy('id', 'desc')->take(3)->get();
        return view('causes-single', compact('contact', 'tweet'));
    }
    public function indexBDD() {
        $cause = Cause::all();
        return view('cause/bddCause', compact('cause'));
    }
    public function create()
    {
        $cause = Cause::all();
        return view('cause/ajoutCause', compact('cause'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|max:50|min:4',
            'texte' => 'required|max:3000|min:4',
            'image' => 'required|file',
            'prix' => 'required|integer',
        ]);

        $image = Storage::disk('public')->put('', $request->file('image'));

        $cause = new Cause();
        $cause->titre = $request->input('titre');
        $cause->texte = $request->input('texte');
        $cause->prix = $request->input('prix');
        $cause->image = $image;
        $cause->save();

        return redirect()->route('cause');
    }
    // public function show($id)
    // {
    //     $this->authorize('view', Pokemon::class);
    //     $pokemon = Pokemon::all()->where('id', $id);
    //     return view('showPokemon', compact('pokemon'));
    // }
    public function edit($id)
    {
        $cause = Cause::find($id);
        return view('cause/editCause', compact('cause'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|max:50|min:4',
            'texte' => 'required|max:3000|min:4',
            'image' => 'required|file',
            'prix' => 'required|integer',
        ]);

        $image = Storage::disk('public')->put('', $request->file('image'));

        $cause = Cause::find($id);
        $cause->titre = $request->input('titre');
        $cause->texte = $request->input('texte');
        $cause->prix = $request->input('prix');
        $cause->image = $image;

        $cause->save();

        return redirect()->route('cause');
    }
    public function destroy($id)
    {
        $cause = Cause::find($id);
        $cause->delete();
        return redirect()->route('cause');
    }
}
