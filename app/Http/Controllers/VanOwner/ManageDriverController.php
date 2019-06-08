<?php

namespace App\Http\Controllers\VanOwner;
use App\Vehicle;
use App\VanDriver;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use Session;
use Response;


class ManageDriverController extends Controller
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
        // $Vehicles=Vehicle::all();
        return view('/VanOwner/vanOwnerManageDriver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

       // $selectedDriver =$request->get('searchDriver');
       // $data =vanDriver::where('firstName',$selectedDriver)->get();
       // echo $data ;

       if($request->ajax())
       {
        $output="";
        $selectedDriver=vanDriver::where('firstName','LIKE','%'.$request->searchDriver."%")
                                   ->orWhere('lastName','LIKE','%'.$request->searchDriver."%")
                                   ->orWhere('mobileNumber','LIKE','%'.$request->searchDriver."%")
                                   ->orWhere('province','LIKE','%'.$request->searchDriver."%")
                                   ->orWhere('city','LIKE','%'.$request->searchDriver."%")
                                   ->get();


        return Response::json($selectedDriver);
        // if($selectedDriver)
        // {
        //     foreach ($selectedDriver as $key => $driver) {
        //         $output.='<tr>'.
        //         '<td><img src="Images/vanDriver/ProfilePictures/'.$driver->photo.' width="100"></td>'.
        //         '<td>'.$driver->firstName.'</td>'.
        //         '<td>'.$driver->email.'</td>'.
        //         '<td>'.$driver->mobileNumber.'</td>'.
        //         '<td>'.$driver->province.'</td>'.
        //         '<td>'.$driver->city.'</td>'.
        //         '<td>'.'<button type="submit" class="btn btn-success btn-block">Add </button>'.'</td>'.
        //         '</tr>';
        //     }
        //     return Response($output);
            // <img src="{{url('Images/vanDriver/ProfilePictures')}}/$driver->photo" width="100">
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
