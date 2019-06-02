<?php

namespace App\Http\Controllers;
use App\Children;

use Illuminate\Http\Request;
use Auth;
use Image;
use Session; 


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
    // Manage page functions starts
    public function test()
    {
      return view('test');
    }
    public function manageChildren()
    {
        $Childrens=Children::all();
        return view('studentParentManageChildren')->with('Childrens', $Childrens);
    }

    function fetch(Request $request)
    {
       $selectedStudent =$request->get('selectedStudent');
       // $value  =$request->get('value');
       // $dependent=$request->get('dependent');
       $data =Children::where('firstName',$selectedStudent)->get();
        echo $data ;
    }

    public function createChildren(Request $request)
    {
        $this->validate($request, [
        
        'firstName'   => 'required',
        'lastName'   => 'required',
        'schoolName'   => 'required',
        'age'=>'required',
        'gender' => 'required',
        'tripType' => 'required',
        'location' => 'required',
        
        
      ]);

      $Children=new Children;
      $Children->studentParentEmail=  Auth::user()->email;
      $Children->firstName  = $request -> input('firstName'); 
      $Children->lastName   = $request -> input('lastName');
      $Children->schoolName = $request -> input('schoolName');
      $Children->age        = $request -> input('age');
      $Children->gender     = $request -> input('gender');
      
      
      
   


      if($request ->hasfile('photo')){
        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $location = public_path('Images/Parent/Childrens/'.$filename);
        Image::make($photo)->save($location);

        $Children->photo=$filename;
      } 

      $Children->tripType   = $request -> input('tripType');
      $Children->location   = $request -> input('location');

           
     

      $Children->save();
      Session::flash('success','added successfully');
      return redirect()->intended(route('studentParent.manageChildren'));

      //  if (Auth::guard('vanDriver')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      //   // if successful, then redirect to their intended location
      //   return redirect()->intended(route('vanDriver.dashboard'));
      // }
    }

    public function updateChildren(Request $request,$id)
    {
       $this->validate($request, [

        'firstName'   => 'required',
        'lastName'   => 'required',
        'schoolName'   => 'required',
        'age'=>'required',
        'gender' => 'required',
        'tripType' => 'required',
        'location' => 'required',
        
        
      ]);

      $Children=Children::find($id);

      $Children->studentParentEmail=  Auth::user()->email;
      $Children->firstName  = $request -> input('firstName'); 
      $Children->lastName   = $request -> input('lastName');
      $Children->schoolName = $request -> input('schoolName');
      $Children->age        = $request -> input('age');
      $Children->gender     = $request -> input('gender');
      
      
      
   


      if($request ->hasfile('photo')){
        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $location = public_path('Images/Parent/Childrens/'.$filename);
        Image::make($photo)->save($location);

        $Children->photo=$filename;
      } 

      $Children->tripType   = $request -> input('tripType');
      $Children->location   = $request -> input('location');

           
     

      $Children->save();
      Session::flash('success','Childrens details updated successfully');
      return redirect()->intended(route('studentParent.manageChildren'));
    }
    


    //Manage page functions ends

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
