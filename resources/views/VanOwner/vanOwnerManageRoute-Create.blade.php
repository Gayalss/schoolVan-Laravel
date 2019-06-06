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
<div class="card" style="margin: 5%"> <!-- Second Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;">Routes</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto" method="post" action="{{route('manageVan.store')}}"  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6 ">
              <label for="vehicleType">Select Vehicle</label>
              <select id="vehicleType" class="form-control" name="vehicleType">
               {{--  <option selected>Car</option>
                <option>Van</option>
                <option>Bus</option> --}}
                @foreach($Vehicles as $Vehicle)
                  <option selected>{{$Vehicle->numberPlate}}</option>
                @endforeach
              </select>
            </div>  
            <div class="form-group col-md-6">
               <label for="vehicleType">Select Driver</label>
              <select id="vehicleType" class="form-control" name="vehicleType">
               {{--  <option selected>Car</option>
                <option>Van</option>
                <option>Bus</option> --}}
                {{-- @foreach($Vehicles as $Vehicle)
                  <option selected>{{$Vehicle->numberPlate}}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="schools">Add Schools</label>
              <input type="text" class="form-control" id="schools" placeholder="School" name="schools">
            </div>

            <div class="form-group col-md-6">
              <label for="checkpoints">Add Chekpoint</label>
              <input type="number" class="form-control" id="checkpoints" placeholder="checkpoint" name="checkpoints">
            </div>
            <div class="form-group col-md-6">
              <label for="numberPlate">Add Trip type</label>
              <input type="text" class="form-control" id="numberPlate" placeholder="Number Plate" name="numberPlate">
            </div>
            <div class="form-group col-md-6">
              <label for="manufacturedYear">School time</label>
              <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
              <label class="custom-control-label" for="customRadio1">10.30am</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">1.30pm</label>
              </div>
            </div>
            <!-- <div class="form-group form-check">
              <label class="checkbox-inline"><input type="checkbox" value="checked">Male</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
              
            </div> -->
            <div class="form-group col-md-6">
              

            </div>
              

           
          </div>
          
          <div class="row" style="margin-bottom:50px"></div>
          <div class="row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <a href="{{route('routes.index')}}" class="btn btn-lg btn-success">Back</a>
                </div>
                <div class="col-md-8">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>
              </div>
              
              
            </div>
              
            <div class="form-group col-md-3"></div>
              
              
               
          </div>
          
          
        </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- Second Card Ends -->

@endsection
