<?php

namespace App\Http\Controllers\StudentParent;
use App\Children;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Session; 


class ChildrenManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:studentParent');
    }

    public function index()
    {
        $Childrens=Children::all();
        return view('/StudentParent/studentParent-ManageChildren')->with('Childrens', $Childrens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('/StudentParent/studentParent-ManageChildren-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
      return redirect()->intended('studentParent/manageChildren/create');
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
        $Children = Children::find($id);
        return view('/StudentParent/studentParent-ManageChildren-Edit')->with('Children', $Children);

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
          $this->validate($request, [
        
        'firstName'   => 'required',
        'lastName'   => 'required',
        'schoolName'   => 'required',
        'age'=>'required',
        'gender' => 'required',
        'tripType' => 'required',
        'location' => 'required',
        
        
      ]);

      $Children= Children::find($id);
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
      Session::flash('success','Updated successfully');
      return redirect()->intended(route('manageChildren.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        
        $Children = Children::find($id);
        $Children->delete();
        Session::flash('success','Children deleted successfully');
        return redirect()->route('manageChildren.index');
         // Session::flash('success','added successfully');
    }
}
