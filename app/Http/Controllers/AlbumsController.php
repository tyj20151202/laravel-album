<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Album;

class AlbumsController extends Controller
{
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required|max:50',
        ]);

        $album = Album::create([
	    'name' => $request->name,
	    'intro' => $request->intro,
	    'password' => $request->password,
        ]);

        session()->flash('success','create successful');
        return back();
    }

    public function show($id){

        $album = Album::findOrFail($id);

        return view('albums.show', compact('album'));
    }

    public function update(Request $request, $id){

        $this->validate($request,[
            'name' => 'required|max:50',
        ]);

        $album = Album::findOrFail($id);
        $album->update([
            'name' => $request->name,
            'intro' => $request->intro,
        ]);

        session()->flash('success','Edit successful');
        return back();
    }
}
