<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class StudentsControllor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cv' => 'required|file',

        ]);
        $extension= $request->file("file")->getClientOriginalExtension();
        $stringPaperFormat=str_replace(" ", "", $request->input('title'));
        $fileName= $stringPaperFormat.".".$extension;
        $FileEnconded=  File::get($request->cv);
        Storage::disk('local')->put('public/cv'.$fileName, $FileEnconded);
       // $newsubmission= array("title"=>$title, "paper"=>$fileName);

        $op =   students::create($data);
        if($op){

            dd('done');
        }else{
            dd('error');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(rc $rc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rc $rc)
    {
        //
    }




    public function Login(){
        return view('Users.login');
    }



    public function DoLogin(Request $request){
        // logic .....

        $data = $this->validate($request,[
            "email"    => "required|email",
            "password" => "required|min:6"
        ]);


        if(auth()->attempt($data)){
            return redirect(url('/index'));
        }else{
            return redirect('/Login');
        }

    }



    public function logout(){
        auth()->logout();
        return redirect(url('/Login'));
    }
}
