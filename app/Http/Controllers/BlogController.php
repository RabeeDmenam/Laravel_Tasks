<?php

namespace App\Http\Controllers;
use App\Models\adminmodel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(request $request)
    {
     $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'address' => 'required|min:30',
            'url' => 'required|url',
            'gender' => '',
        ]);

     $op =   adminmodel::create($data);
     if($op){

        dd('done');
     }else{
         dd('error');
     }

    // return view('index', compact('op'));

    }

    public function index()
    {
        $data=adminmodel::get();

        return  view('index',compact('data'));
    }


    public function edit($id)
    {
        $data2 = adminmodel::find($id);
        return  view('edit',['data2' => $data2]);

    }
    public function update(Request $request )
    {
        $update = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|min:30',
            'url' => 'required|url',
        ]);
        $DOupdate= adminmodel::where('id',$request->id)->update($update);
            if ($DOupdate)
            {
                $message = "updated done";
            }else{
                $message = "Something went wrong";
            }

            session()-flash('message',$message);

    }



}
