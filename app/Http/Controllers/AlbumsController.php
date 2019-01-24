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
}
