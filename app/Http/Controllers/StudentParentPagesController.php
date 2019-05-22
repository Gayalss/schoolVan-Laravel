<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentParentPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:studentParent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function attendance()
    {
        return view('studentParentAttendance');
    }

    public function location()
    {
        return view ('studentParentLocation');
    }


    public function newVans()
    {
        return view ('studentParentNewSchoolVans');
    }
   
    
}
