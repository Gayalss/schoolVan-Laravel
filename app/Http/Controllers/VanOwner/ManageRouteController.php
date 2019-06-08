<?php

namespace App\Http\Controllers\VanOwner;
use App\Vehicle;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Session;
use Illuminate\Support\Facades\Input; 


class ManageRouteController extends Controller
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
        $Vehicles=Vehicle::all();
        return view('/VanOwner/vanOwnerManageRoute')->with('Vehicles', $Vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $Vehicles=Vehicle::all();
        return view('/VanOwner/vanOwnerManageRoute-Create')->with('Vehicles', $Vehicles);
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
        
        'selectVehicle'   => 'required',
        'selectDriver'   => 'required',
        'schools'   => 'required',
        'checkPoints'=>'required',
        'tripType' => 'required',
        'schoolTime' => 'required',
        
        
        
      ]);
         // echo "string";
        $schools = $request -> input('schools');

        $Vehicle=new Vehicle;
        $Vehicle->vanOwnerEmail=  Auth::user()->email;
        $Vehicle->vehicleType  = $request -> input('vehicleType'); 
        $Vehicle->vehicleModel   = $request -> input('vehicleModel');
        $Vehicle->color = $request -> input('color');
        $Vehicle->totalSeats        = $request -> input('totalSeats');
        $Vehicle->numberPlate        = $request -> input('numberPlate');
        $Vehicle->manufacturedYear     = $request -> input('manufacturedYear');
        foreach ($schools as $key => $school) {
            echo $school;
        }
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
