<?php

namespace App\Http\Controllers;
use App\Children;

use Illuminate\Http\Request;

class StudentParentController extends Controller
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
    public function index()
    {   
        $Childrens=Children::all();
        return view('StudentParent/studentParent')->with('Childrens', $Childrens);
    }

    function fetch(Request $request)
    {
       $selectedStudent =$request->get('selectedStudent');
       // $value  =$request->get('value');
       // $dependent=$request->get('dependent');
       $data =Children::where('firstName',$selectedStudent)->get();
        echo $data ;
    }

   
    
}
