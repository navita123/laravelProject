<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserList;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $validatedata = $request->validate([
        //     'username' => 'required|max:255',
        //     'email' => 'required',
        //     'mobile'   => 'required|integer',
        //     'image' => 'required|mimes:jpeg,bmp,png',
        //     'gender'=>'required'
        //  ]);
       
       // $image = $request->file('image');
         //$imgname = time().$image->getClientOriginalName() ;
         //$destinationPath = public_path('/images');
        //$image->move($destinationPath, $imgname);
            $obj = new UserList;
            $obj->username = $request->username;
            $obj->email =  $request->email;
            $obj->mobile = $request->mobile;
            $obj->gender = $request->gender;
            //$obj->image = $imgname;
            if($obj->save())
                return redirect()->back()->with('message', 'User Registered Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
