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
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required|min:30',
            'url' => 'required|url',
            'gender' => '',
        ]);
        if ($validated) {
            echo $request->title . '<br>' . $request->content;
        } else {
            $validated->error();
        }
        $data=  $request->get()->all();
        return view('form')->with($data);
     
    }
}
