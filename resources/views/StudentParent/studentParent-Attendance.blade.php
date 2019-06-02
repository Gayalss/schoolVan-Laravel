@extends('layouts.studentParentLayout')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
  
@endsection

@section('active2')
active
@endsection

@section('BodyContent')

<div class="container">
  {{-- <div class="row" style="margin-top: 20px">
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
  </div>  --}}
  <div class="row">
    <div class="form-group col-md-4">
              
    </div> 
    <div class="form-group col-md-4 col-xs-12">
      <label for="selectStudent">Select Student</label>
      <select id="selectStudent" class="form-control dynamic" data-dependent="state">
        @foreach($Childrens as $Children)
          <option selected value="{{$Children->firstName}}">{{$Children->firstName}} {{$Children->lastName}}</option>
        @endforeach
        {{-- <option selected>Ishara Ramanayake</option> --}}
         
         
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
@section('Scripts')
   <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

   <script >
      $(function () {
          $('#datepicker').datepicker({
              format: "dd/mm/yyyy",
              autoclose: true,
              todayHighlight: true,
            showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,
            changeMonth: true,
            changeYear: true,
            orientation: "button"
          });
      });
  </script>
@endsection
