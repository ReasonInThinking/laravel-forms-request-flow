<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
      // Go to the page with the form
    public function create() {
        return view('form');
    }

    // Getting text from a field
    public function store(Request $request) {
        $text = $request->input('my_text');
        return "Showing a message: " . $text;
    }
}
