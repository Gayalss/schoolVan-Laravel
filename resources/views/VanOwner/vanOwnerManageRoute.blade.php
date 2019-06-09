@extends('layouts.schoolVanOwnerLayout')
@section('active5')
active
@endsection

@section('BodyContent')

<div class="container" style="margin:20px"></div>
<div class="container">
  @if(session()->has('success'))
    
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4 class="alert-heading">Vehicle!</h4>
      <p class="mb-0">{{session()->get('success')}}</p>
    </div>
</div>

  @endif
</div>
<!--Body starts -->


<!-- <span> -->
  {{-- <div class="container">
    <div class="row" style="margin-top: 20px">
      <div class="form-group col-md-4">

      </div> 
      <div class="form-group col-md-4">
        <label for="tripType">Select School Vans</label>
        <select id="tripType" class="form-control">
          <option selected>Town Ace</option>
          <option>Rosa</option>
          <option>Caravaan</option>
        </select>
        
      </div>
      <div class="form-group col-md-4">

      </div>  
    </div> 


    
  </div>  --}}


  
<!-- </span> -->
<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"><a href="{{route('routes.create')}}" class="btn btn-success" style="margin-left:35%">Add Route</a>
      </div>
     
      
    </div>

    <div class="container">
      <hr>
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align: center; margin:auto;margin-top:10px;margin-bottom:10px">Routes</h1>
          <table  class="table table-hover table-responsive-lg">
            <thead>
              <tr>
          
                <th scope="col">Driver Photo</th>
                <th scope="col">Driver Name</th>
                <th scope="col">Vehicle Photo</th>
                <th scope="col">Vehicle Model</th>
                <th scope="col">Trip Type</th>
                <th scope="col">School Time</th>
                <th scope="col">Schools</th>
                <th scope="col">Check Points</th>

              </tr>
            </thead>
            <tbody>
              {{-- @foreach($SchoolVanRoutes as $SchoolVanRoute) --}}
                {{-- <tr class="table table-bordered table-striped table-light"> --}}
            
                  {{-- <td><img src="{{url('Images/vanOwner/Vehicles')}}/{{$Vehicle->photo}}" width="100"></td> --}}
                  {{-- <td>{{$SchoolVanRoute->vanOwnerEmail}}</td> --}}
                  {{-- <td>{{$SchoolVanRoute->selectVehicle}}</td> --}}
                  {{-- <td>{{$SchoolVanRoute->selectDriver}}</td> --}}
                  {{-- <td>{{$SchoolVanRoute->tripType}}</td> --}}
                  {{-- <td>{{$SchoolVanRoute->schoolTime}}</td> --}}
                  {{-- <td>{{$SchoolVanRoute->manufacturedYear}}</td> --}}
                  {{-- <td> --}}
                  {{-- <form action="{{route('manageVan.destroy',$Vehicle->id)}}" method="POST"> --}}
                    {{-- {{@csrf_field()}} --}}

                    {{-- @method('DELETE') --}}

                    
                    {{-- <a class="btn btn-sm btn-warning btn-block" href="{{route('manageVan.edit', $Vehicle->id)}}">Edit</a> --}}
                    {{-- <button type="submit" class="btn btn-sm btn-danger btn-block">Delete</button> --}}
                  {{-- </form> --}}
                  {{-- </td> --}}

                {{-- </tr> --}}
              {{-- @endforeach --}}
            </tbody>
          
          </table>
        </div>
      </div>

    </div>
  </div>
</div> <!-- First Card Ends -->

@endsection
