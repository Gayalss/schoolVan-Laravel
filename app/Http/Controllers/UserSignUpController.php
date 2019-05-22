<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSignUpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('signUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userType=$request -> input('userType');

        if ($userType=='SchoolVanOwner') {
            // return redirect()->route(' vanOwner/register');
            return redirect('/vanOwner/register');
        }
        elseif ($userType=='Parent') {
             // return redirect()->route(' studentParent/register');
            return redirect('/studentParent/register');
        }
        elseif ($userType=='School') {
             return redirect('/School/register');
        }
        elseif ($userType=='SchoolVanDriver') {
            // return redirect()->route(' vanDriver/register');
            return redirect('/vanDriver/register');
        }
        // echo $userType;
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

    /**
     * Show the form for editing the specified resource.
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
