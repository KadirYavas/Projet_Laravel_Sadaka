<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cause;

class DonController extends Controller
{
    public function index($id) {
        $cause = Cause::find($id);
        return view('don/donate', compact('cause'));
    }
    public function store(Request $request, $id){

        $cause = Cause::find($id);
        $cause->prix = $cause->prix + $request->input('don');
        $cause->save();

        return redirect()->route('causes');
    }
}
