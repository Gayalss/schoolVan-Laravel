@extends('layouts.studentParentLayout')

@section('active2')
active
@endsection

@section('BodyContent')

<div class="container">
  <div class="row" style="margin-top: 20px">
    <div class="form-group col-md-4">

    </div> 
    <div class="form-group col-md-4 col-xs-12">
      <label for="tripType">Select Student</label>
      <select id="tripType" class="form-control">
        <option selected>Ishara Ramanayake</option>
        <option>Dilitha Ramanayake</option>
        <option>Sineth Ramanayake</option>
      </select>
    </div>
    <div class="form-group col-md-4">

    </div>  
  </div> 


  <div class="row">
    <div class="form-group col-md-4 col-xs-12 ">

    </div> 
    
    <div class="form-group col-md-4 ">

      <form>
        <div class="form-group">
          <label for="tripType">Select Date</label>
          <div class='input-group date' id='datepicker'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
              <!-- <span class="glyphicon glyphicon-calendar"></span> -->
              <ion-icon  name="calendar" size="large"></ion-icon>

            </span>
          </div>
        </div>
      </form>
    </div> 
    <div class="form-group col-md-4 ">

    </div> 
  </div>
</div> 

  
<!-- </span> -->
<div class="card" style="margin: 5%;height:600px "> <!-- Card Starts -->
  
</div> <!-- First Card Ends -->


@endsection
