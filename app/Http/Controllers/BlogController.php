<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:30|max:255',
            'content' => 'required|min:30',
        ]);
        if ($validated) {
            echo $request->title . '<br>' . $request->content;
        } else {
            $validated->error();
        }
    }
}
