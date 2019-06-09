<?php

namespace App\Http\Controllers\VanOwner;
use App\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Session;

class ManageVanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:vanOwner');
    }


    public function index()
    {   
        $Vehicles=Vehicle::all()->where('vanOwnerEmail', Auth::user()->email);;
        return view('/VanOwner/vanOwnerManageVan')->with('Vehicles', $Vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/VanOwner/vanOwnerManageVan-Create');
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
        
        'vehicleType'   => 'required',
        'vehicleModel'   => 'required',
        'color'   => 'required',
        'totalSeats'=>'required',
        'numberPlate' => 'required',
        'manufacturedYear' => 'required',
        
        
        
      ]);

      $Vehicle=new Vehicle;
      $Vehicle->vanOwnerEmail=  Auth::user()->email;
      $Vehicle->vehicleType  = $request -> input('vehicleType'); 
      $Vehicle->vehicleModel   = $request -> input('vehicleModel');
      $Vehicle->color = $request -> input('color');
      $Vehicle->totalSeats        = $request -> input('totalSeats');
      $Vehicle->numberPlate        = $request -> input('numberPlate');
      $Vehicle->manufacturedYear     = $request -> input('manufacturedYear');
      // $Vehicle->photo     = $request -> input('photo');
      
      
      
      
   


      if($request ->hasfile('photo')){
        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $location = public_path('Images/vanOwner/Vehicles/'.$filename);
        Image::make($photo)->save($location);

        $Vehicle->photo=$filename;
      } 

     

           
     

      $Vehicle->save();
      Session::flash('success','added successfully');
      return redirect()->intended(route('manageVan.create'));
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
        $Vehicle = Vehicle::find($id);
        return view('/VanOwner/vanOwnerManageVan-Edit')->with('Vehicle', $Vehicle);
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
        
        'vehicleType'   => 'required',
        'vehicleModel'   => 'required',
        'color'   => 'required',
        'totalSeats'=>'required',
        'numberPlate' => 'required',
        'manufacturedYear' => 'required',
        
        
      ]);

      $Vehicle=Vehicle::find($id);
      
      $Vehicle->vehicleType     = $request -> input('vehicleType'); 
      $Vehicle->vehicleModel    = $request -> input('vehicleModel');
      $Vehicle->color           = $request -> input('color');
      $Vehicle->totalSeats      = $request -> input('totalSeats');
      $Vehicle->numberPlate     = $request -> input('numberPlate');
      $Vehicle->manufacturedYear= $request -> input('manufacturedYear');
      // $Vehicle->photo     = $request -> input('photo');
      
      
      
      
   


      if($request ->hasfile('photo')){
        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $location = public_path('Images/vanOwner/Vehicles/'.$filename);
        Image::make($photo)->save($location);

        $Vehicle->photo=$filename;
      } 

     

           
     

      $Vehicle->save();
      Session::flash('success','Updated successfully');
      return redirect()->intended(route('manageVan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vehicle = Vehicle::find($id);
        $Vehicle->delete();
        Session::flash('success','Vehicle deleted successfully');
        return redirect()->route('manageVan.index');
    }
}
