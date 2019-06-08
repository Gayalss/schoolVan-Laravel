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
        
        <form style="margin:5% auto" method="post" action="{{route('routes.store')}}"  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6 ">
              <label for="selectVehicle">Select Vehicle</label>
              <select id="selectVehicle" class="form-control" name="selectVehicle">
               {{--  <option selected>Car</option>
                <option>Van</option>
                <option>Bus</option> --}}
                @foreach($Vehicles as $Vehicle)
                  <option selected>{{$Vehicle->numberPlate}}</option>
                @endforeach
              </select>
            </div>  
            <div class="form-group col-md-6">
               <label for="selectDriver">Select Driver</label>
              <select id="selectDriver" class="form-control" name="selectDriver">
                <option selected>Nimal Dissanayake</option>
                <option>Kamal Silva</option>
               {{--  <option selected>Car</option>
                <option>Van</option>
                <option>Bus</option> --}}
                {{-- @foreach($Vehicles as $Vehicle)
                  <option selected>{{$Vehicle->numberPlate}}</option>
                @endforeach --}}
              </select>
            </div>
            <div class="form-group col-md-6" id="dynamic_field_School">
              <label for="schools">Add Schools</label>
              <div class="form-row">
                  <div class="form-group col-md-9">
                    <input type="text" class="form-control" id="schools" placeholder="School" name="schools[]">
                  </div>
                  <div class="form-group col-md-3">
                    <button class="btn btn-success btn-block"  id="addSchool">Add more</button>
                  </div>

              </div>
              
              
            </div>

            <div class="form-group col-md-6" id="dynamic_field_CheckPoint">
              <label for="checkpoints">Add Chekpoint</label>
              <div class="form-row">
                  <div class="form-group col-md-9">
                    <input type="text" class="form-control" id="checkpoints" placeholder="checkpoint" name="checkPoints[]">
                  </div>
                  <div class="form-group col-md-3">
                    <button type="button" class="btn btn-success btn-block" id="addCheckPoint">Add more</button>
                  </div>

              </div>
              
            </div>
            <div class="form-group col-md-6">
              <label for="tripType">Trip Type</label>
              <select id="tripType" name="tripType" class="form-control">
                <option  id="HTS" value="Home to School">Home to School</option>
                <option id="STH" value="School to Home">School to Home</option>
                <option id="BW" value="Both Ways">Both Ways</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="schoolTime">School time</label>
              <div class="custom-control custom-radio">
                <input type="radio" id="primarySchool" name="schoolTime" class="custom-control-input" checked="">
                <label class="custom-control-label" for="primarySchool">10.30am</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="secondarySchool" name="schoolTime" class="custom-control-input">
                <label class="custom-control-label" for="secondarySchool">1.30pm</label>
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

@section('Scripts')
  
  <script type="text/javascript">
    $(document).ready(function(){

      var i=1;
      //Button add more field
      
        $('#addSchool').click(function(e){
          e.preventDefault();
          // console.log('Hi!');
           i++;
        // Add action to button add to append more input field
        $('#dynamic_field_School').append('',
          '<div class="form-row" id="dynamic_field_School'+i+'">'
          +  '<div class="form-group col-md-9">'
          +    '<input type="text" class="form-control" id="schools'+i+'" placeholder="school" name="schools[]">'
          +        '</div>'
          +  '<div class="form-group col-md-2">'
          +      '<button class="btn btn-danger btn_remove_School" id='+i+'>X</button>'
          +  '</div>'

          +'</div>'


          );
        });
      
     

      $(document).on('click','.btn_remove_School',function(e){
        e.preventDefault();
        var button_id = $(this).attr("id");
        console.log(button_id);
        $('#dynamic_field_School'+button_id+'').remove();
       

      });

    });

  </script>

  <script type="text/javascript">
    $(document).ready(function(){

      var i=1;
      //Button add more field
      
        $('#addCheckPoint').click(function(e){
          e.preventDefault();
          // console.log('Hi!');
           i++;
        // Add action to button add to append more input field
        $('#dynamic_field_CheckPoint').append('',
          '<div class="form-row" id="dynamic_field_CheckPoint'+i+'">'
          +  '<div class="form-group col-md-9">'
          +    '<input type="text" class="form-control" id="checkpoints'+i+'" placeholder="checkpoint" name="checkPoints[]">'
          +        '</div>'
          +  '<div class="form-group col-md-2">'
          +      '<button class="btn btn-danger btn_remove_CheckPoint" id='+i+'>X</button>'
          +  '</div>'

          +'</div>'


          );
        });
      
     

      $(document).on('click','.btn_remove_CheckPoint',function(e){
        e.preventDefault();
        var button_id = $(this).attr("id");
        console.log(button_id);
        $('#dynamic_field_CheckPoint'+button_id+'').remove();
       

      });

    });

  </script>



@endsection

@endsection
