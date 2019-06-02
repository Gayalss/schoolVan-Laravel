@extends('layouts.schoolVanOwnerLayout')
@section('active2')
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
      <h3 style="text-align: center; margin:auto;"> Vehicle's Details</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto" method="post" action="{{route('manageVan.update',$Vehicle->id)}}"  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          @method('PUT')
          <div class="form-row">
            <div class="form-group col-md-6 ">
              <label for="vehicleType">Vehicle Type</label>
              <select id="vehicleType" class="form-control" name="vehicleType">
               
              
                @if($Vehicle->vehicleType=='Car')
                  <option selected >Car</option>
                  <option>Van</option>
                  <option>Bus</option>

                @elseif($Vehicle->vehicleType=='Van')
                  <option>Car</option>
                  <option selected >Van</option>
                  <option>Bus</option>

                @elseif($Vehicle->vehicleType=='Bus')
                  <option>Car</option>
                  <option>Van</option>
                  <option  selected >Bus</option>

                @endif
              </select>

              
            </div>  
            <div class="form-group col-md-6">
              <label for="vehicleModel">Vehicle Model</label>
              <input type="text" class="form-control" id="vehicleModel" placeholder="Vehicle Model" name="vehicleModel" value="{{$Vehicle->vehicleModel}}">
            </div>
            <div class="form-group col-md-6">
              <label for="color">Color</label>
              <input type="text" class="form-control" id="color" placeholder="Color" name="color" value="{{$Vehicle->color}}">
            </div>

            <div class="form-group col-md-6">
              <label for="totalSeats">Total Seats</label>
              <input type="number" class="form-control" id="totalSeats" placeholder="Total Seats" name="totalSeats" value="{{$Vehicle->totalSeats}}">
            </div>
            <div class="form-group col-md-6">
              <label for="numberPlate">Number Plate</label>
              <input type="text" class="form-control" id="numberPlate" placeholder="Number Plate" name="numberPlate" value="{{$Vehicle->numberPlate}}">
            </div>
            <div class="form-group col-md-6">
              <label for="manufacturedYear">Manufactured Year</label>
              <input type="number" class="form-control" id="manufacturedYear" placeholder="Manufactured Year" name="manufacturedYear" value="{{$Vehicle->manufacturedYear}}">
            </div>
            <!-- <div class="form-group form-check">
              <label class="checkbox-inline"><input type="checkbox" value="checked">Male</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
              
            </div> -->
            <div class="form-group col-md-6">
              

            </div>
              <div class="form-group col-md-6">
                <label for="photo">photo</label>
                <input type="file" class="form-control-file" id="photo" placeholder="photo" name="photo" value="{{$Vehicle->photo}}">
              </div>

           
          </div>
          
          <div class="row" style="margin-bottom:50px"></div>
          <div class="row">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <a href="{{route('manageVan.index')}}" class="btn btn-lg btn-success">Back</a>
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
