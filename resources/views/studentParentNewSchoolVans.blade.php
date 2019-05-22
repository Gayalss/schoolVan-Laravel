@extends('layouts.studentParentLayout')

@section('active4')
active
@endsection

@section('BodyContent')

{{-- Body Starts --}}
<div class="container">
  <div class="row" style="margin-top: 20px">
    <div class="form-group col-md-4">

    </div> 
    <div class="form-group col-md-4">
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


  <!-- <div class="row">
    <div class="form-group col-md-4 col-xs-12 ">

    </div> 
    
    <div class="form-group col-md-4 col-xs-12">

      <form>
        <div class="form-group">
          <label for="tripType">Select Date</label>
          <div class='input-group date' id='datepicker'>
            <input type='text' class="form-control" />
            <span class="input-group-addon">
              
              <ion-icon  name="calendar" size="large"></ion-icon>

            </span>
          </div>
        </div>
      </form>
    </div> 
    <div class="form-group col-md-4 col-xs-12 ">

    </div> 
  </div> -->
</div> 

  
<!-- </span> -->
<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">


     <!--  <div class="row"> -->

      <form style="margin:5% auto">
        <h3 style="text-align: center; margin:auto;"> Filter Search</h3>
        <hr>
        <div class="row">
          <div class="form-group col-md-4">


            <label for="School Time">School Time</label>
            <!-- Group of default radios - option 1 -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="radioSchoolTimePrimary" name="radioSchoolTime">
              <label class="custom-control-label" for="radioSchoolTimePrimary"> 11.30 am</label>
            </div>

            <!-- Group of default radios - option 2 -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="radioSchoolTimeSecondary" name="radioSchoolTime" checked>
              <label class="custom-control-label" for="radioSchoolTimeSecondary"> 1.30 pm</label>
            </div>
          </div>


          <div class="form-group col-md-4">

            <label for="SchoolVanType">School Van Type</label>

            <!-- Group of default radios - option 1 -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="radioSchoolVanTypeGirls" name="radioSchoolVanType">
              <label class="custom-control-label" for="radioSchoolVanTypeGirls">Girls</label>
            </div>

            <!-- Group of default radios - option 2 -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="radioSchoolVanTypeBoys" name="radioSchoolVanType" checked>
              <label class="custom-control-label" for="radioSchoolVanTypeBoys">Boys</label>
            </div>
            <!-- Group of default radios - option 3 -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="radioSchoolVanTypeBoth" name="radioSchoolVanType" checked>
              <label class="custom-control-label" for="radioSchoolVanTypeBoth">Both</label>
            </div>
            
            

          </div>
          <div class="form-group col-md-4">
            
              <label for="school">Trip Type</label>
               <!-- Group of default radios - option 1 -->
               <div class="custom-control custom-radio">
                 <input type="radio" class="custom-control-input" id="radioTripTypeHomeToSchool"
                  name="radioTripTypeBoth">
                 <label class="custom-control-label" for="radioTripTypeHomeToSchool">Home to School</label>
               </div>

               <!-- Group of default radios - option 2 -->
               <div class="custom-control custom-radio">
                 <input type="radio" class="custom-control-input" id="radioTripTypeSchoolToHome" name="radioTripTypeBoth" checked>
                 <label class="custom-control-label" for="radioTripTypeSchoolToHome">School to Home</label>
               </div>
               <!-- Group of default radios - option 3 -->
               <div class="custom-control custom-radio">
                 <input type="radio" class="custom-control-input" id="radioTripTypeBothWays" name="radioTripTypeBoth" checked>
                 <label class="custom-control-label" for="radioTripTypeBothWays">Both Ways</label>
               </div>               
            
          </div>
        </div><!-- End of first row -->
        <div class="row">
          <div class="form-group col-md-4">
            
          </div>
          <div class="form-group col-md-4" style="text-align: center;">
            <button type="button" class="btn btn-primary" style="margin-top:50px;width: 150px">Search</button>
          </div>
          <div class="form-group col-md-4">
            
          </div>
        </div>
        <div class="row"> <!--This is for showing search results in a table  -->
          <div class="form-group col-md-4">
            
          </div>
          <div class="form-group col-md-4">
            
          </div>
          <div class="form-group col-md-4">
            
          </div>
        </div><!--This is for showing search results in a table end -->
      </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- First Card Ends -->





<!-- Body ends -->


@endsection