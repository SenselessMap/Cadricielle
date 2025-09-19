<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	public function home(Request $request) {
		$name = $request->query('name');
		$color = $request->query('color');

		return view('home', compact('name', 'color')); 
	}

    public function form() {
        return view('form'); 
    }

    public function ytb() {
        return view('ytb'); 
    }

	public function submitForm(Request $request) {
		$name = $request->input('name');
		$color = $request->input('color');

		return redirect('/')->with([ //home
			'name' => $name,
			'color' => $color
		]);
	}
}
