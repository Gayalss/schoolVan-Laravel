<?php

namespace App\Http\Controllers\VanOwner;
use App\Vehicle;
use App\SchoolVanRoute;
use App\RouteSchool;
use App\RouteCheckPoint;
use App\VanOwner;

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
        // echo Auth::user()->email;
        // $SchoolVanRoutes=VanOwner::find(Auth::user()->email)->'vanroutes';
        // $comments = VanOwner::find(Auth::user());
        // $SchoolVanRoutes = VanOwner::with('vanroutes')->get()->toArray();
        // foreach ($SchoolVanRoutes as $key => $SchoolVanRoute) {
        //     echo $SchoolVanRoute;
        // }
        // dd($SchoolVanRoutes->id);
        // $SchoolVanRoutes = VanOwner::with('vanroutes')->where('email',Auth::user())->get();
          // echo $SchoolVanRoutes;
        return view('/VanOwner/vanOwnerManageRoute');
        // $SchoolVanRoutes = VanOwner::all()
        // ->join('school_van_routes','school_van_routes.vanOwnerEmail','email')
        // ->join('school_route_check_points','school_route_check_points.vanowneremail','email')
        // ->join('routes_schools','school_route_check_points.vanowneremail','email')
        // ->where('routes_schools'.'.'.Auth::user()->email)
        // ->get();
        // foreach ($SchoolVanRoutes as $key => $SchoolVanRoute) {
        
        // }
         // $comments = VanOwner::find(Auth::user()->email)->vanroutes ;

         // echo $comments;

        //  foreach ($comments as $comment) {
        //     echo $comment;   
        // }
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
        

        $SchoolVanRoute                 = new SchoolVanRoute;
        $SchoolVanRoute->vanOwnerEmail  = Auth::user()->email;
        $SchoolVanRoute->selectVehicle  = $request -> input('selectVehicle'); 
        $SchoolVanRoute->selectDriver   = $request -> input('selectDriver');
        // $SchoolVanRoute->schools        = $school
        // $SchoolVanRoute->checkPoints    = $request -> input('checkPoints');
        $SchoolVanRoute->tripType       = $request -> input('tripType');
        $SchoolVanRoute->schoolTime     = $request -> input('schoolTime');

        $SchoolVanRoute->save();
       
        // $Schools = new RouteSchool;
        // $Schools->vanowneremail  = Auth::user()->email;
        
        // $Schools->schoolName;

        $Schoolslist= $request -> input('schools');
        foreach ($Schoolslist as $key => $School) {
           
            $Schools = new RouteSchool;
            $Schools->vanowneremail  = Auth::user()->email;
            $Schools->schoolName = $School;
            $Schools->save();
            
        }
        



        
        // $RouteCheckPoints->vanowneremail  = Auth::user()->email;
        // $RouteCheckPoints->checkPoint;
        $RouteCheckPointlist= $request -> input('checkPoints');

        foreach ($RouteCheckPointlist as $key => $RouteCheckPoint) {
            
        $RouteCheckPoints = new RouteCheckPoint;
        $RouteCheckPoints->vanowneremail  = Auth::user()->email;    
        $RouteCheckPoints->checkPoint= $RouteCheckPoint;
        $RouteCheckPoints->save();
            
        }

        

        Session::flash('success','added successfully');
        return redirect()->intended(route('routes.create'));


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
