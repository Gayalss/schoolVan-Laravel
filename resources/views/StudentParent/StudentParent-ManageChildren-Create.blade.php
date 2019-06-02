@extends('layouts.studentParentLayout')

@section('active6')
active
@endsection

@section('BodyContent')
<div class="container" style="margin:20px"></div>
<div class="container">
  @if(session()->has('success'))
    
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4 class="alert-heading">Children!</h4>
      <p class="mb-0">{{session()->get('success')}}</p>
    </div>
</div>

  @endif
</div>

<div class="card" style="margin: 5%"> <!-- Second Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container" id="addStudent" style="display: block">

      <h3 style="text-align: center; margin:auto;">Add Student's Details</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto" method="post" action="{{ '/studentParent/manageChildren'}}"  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          
          <div class="form-row">

            {{-- <input type="hidden" name="id" id="id" value="null"> --}}

            <div class="form-group col-md-6">
              <label for="firstName">Student's First Name</label>
              <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Student's First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Student's Last Name</label>
              <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Student's Last Name">
            </div>
            <div class="form-group col-md-6">
              <label for="schoolName">School</label>
              <input type="text" name="schoolName" class="form-control" id="schoolName" placeholder="School">
            </div>
            <div class="form-group col-md-6">
              <label for="age">Age</label>
              <input type="number" name="age" class="form-control" id="age" placeholder="Age">
            </div>
            <!-- <div class="form-group form-check">
              <label class="checkbox-inline"><input type="checkbox" value="checked">Male</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
              
            </div> -->
            <div class="form-group col-md-6">
              <div>
                <label style="margin-right:10px;">Gender</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="male" value="male" name="gender" class="custom-control-input" >
                <label class="custom-control-label" for="male">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="female" value="female" name="gender" class="custom-control-input">
                <label class="custom-control-label" for="female">Female</label>
              </div>
                
            </div>
              <div class="form-group col-md-6">
              <label for="photo">Photo</label>
              <input type="file" class="form-control-file" id="photo" name="photo" placeholder="photo">
            </div>

           
          </div>
          <hr>
            <h3 style="text-align: center; margin:auto;"> Pick up Details</h3>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tripType">Trip Type</label>
              <select id="tripType" name="tripType" class="form-control">
                <option  id="HTS" value="Home to School">Home to School</option>
                <option id="STH" value="School to Home">School to Home</option>
                <option id="BW" value="Both Ways">Both Ways</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="StudentfirstName">Search</label>
              <input type="text" name="location" class="form-control" id="location" placeholder="search">
             {{--  <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="submit">Search</button></span> --}}
            </div>

          </div>
          
          <div class="row" style="margin-bottom:50px"></div>
          <div class="form-row">
            <div class="form-group col-md-3">
              
            </div>
            <div class="form-group col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <a href="{{'/studentParent/manageChildren'}}" class="btn btn-lg btn-success">Back</a>
                </div>
                <div class="col-md-8">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>
              </div>
              
              
            </div>
              
            <div class="form-group col-md-3">
              
            </div>
              
              
               
            </div>
            {{-- <div class="form-group col-md-2">
             
            </div> --}}

          </div>
            {{-- <hr>
            <h3 style="text-align: center; margin:auto;"> Pick up Details</h3>
            <div class="form-group col-md-6">
              <label for="tripType">Trip Type</label>
              <select id="tripType" class="form-control">
                <option selected>Home to School</option>
                <option>School to Home</option>
                <option>Both Ways</option>
              </select>
            </div> 
            <div class="form-group col-md-6 ">
              <label for="StudentfirstName">Search</label>
              <input type="Search" class="form-control" id="StudentfirstName" placeholder="search">
              <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="submit">Search</button></span>
            </div>   --}}
          

        </form>
      <!-- </div> -->
      
    </div>
    <div class="container" id="updateStudent" style="display: none">

      <h3 style="text-align: center; margin:auto;">Edit Student's Details</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto" method="post" {{-- action="{{ route('studentParent.createChildren') }}" --}}  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-row">

            {{-- <input type="hidden" name="id" id="id" value="null"> --}}

            <div class="form-group col-md-6">
              <label for="firstName">Student's First Name</label>
              <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Student's First Name">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Student's Last Name</label>
              <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Student's Last Name">
            </div>
            <div class="form-group col-md-6">
              <label for="schoolName">School</label>
              <input type="text" name="schoolName" class="form-control" id="schoolName" placeholder="School">
            </div>
            <div class="form-group col-md-6">
              <label for="age">Age</label>
              <input type="number" name="age" class="form-control" id="age" placeholder="Age">
            </div>
            <!-- <div class="form-group form-check">
              <label class="checkbox-inline"><input type="checkbox" value="checked">Male</label>
              <label class="checkbox-inline"><input type="checkbox" value="">Female</label>
              
            </div> -->
            <div class="form-group col-md-6">
              <div>
                <label style="margin-right:10px;">Gender</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="male" value="male" name="gender" class="custom-control-input" >
                <label class="custom-control-label" for="male">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="female" value="female" name="gender" class="custom-control-input">
                <label class="custom-control-label" for="female">Female</label>
              </div>
                
            </div>
              <div class="form-group col-md-6">
              <label for="photo">Photo</label>
              <input type="file" class="form-control-file" id="photo" name="photo" placeholder="photo">
            </div>

           
          </div>
          <hr>
            <h3 style="text-align: center; margin:auto;"> Pick up Details</h3>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="tripType">Trip Type</label>
              <select id="tripType" name="tripType" class="form-control">
                <option  id="HTS" value="Home to School">Home to School</option>
                <option id="STH" value="School to Home">School to Home</option>
                <option id="BW" value="Both Ways">Both Ways</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="StudentfirstName">Search</label>
              <input type="text" name="location" class="form-control" id="location" placeholder="search">
             {{--  <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="submit">Search</button></span> --}}
            </div>

          </div>
          <div class="form-row" style="margin:50px"></div>
          <div class="form-row">
            <div class="form-group col-md-3">
              
            </div>
            <div class="form-group col-md-6">
              <div class="form-row">
              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-warning btn-md btn-block">Update Children</button>
              </div>
              {{-- <div class="form-group col-md-4">
                <button type="button" class="btn btn-warning btn-md btn-block">Update Children</button>
              </div>
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-danger btn-md btn-block">Delete Children</button>
              </div> --}}
            </div>
            <div class="form-group col-md-3">
              
            </div>
              
              
               
            </div>
            {{-- <div class="form-group col-md-2">
             
            </div> --}}

          </div>
            {{-- <hr>
            <h3 style="text-align: center; margin:auto;"> Pick up Details</h3>
            <div class="form-group col-md-6">
              <label for="tripType">Trip Type</label>
              <select id="tripType" class="form-control">
                <option selected>Home to School</option>
                <option>School to Home</option>
                <option>Both Ways</option>
              </select>
            </div> 
            <div class="form-group col-md-6 ">
              <label for="StudentfirstName">Search</label>
              <input type="Search" class="form-control" id="StudentfirstName" placeholder="search">
              <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="submit">Search</button></span>
            </div>   --}}
          

        </form>
      <!-- </div> -->
      
    </div>

    
  </div>
</div> <!-- Second Card Ends -->

<div class="card" style="margin: 5%"> <!-- Second Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    
  </div>
</div> 
@section('Scripts')
  <script type="text/javascript">
    $('#selectStudent').on('change', function() {
    var selectedStudent = $(this).val();
    
    
    
        if(selectedStudent!='')
        {

          
          $.ajax({
              url:"{{route('studentParent.fetch')}}",
              method:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                selectedStudent:selectedStudent,
              },
              success:function(result)
              {
               
                var obj = JSON.parse(result);
                // document.getElementById("id").value  = obj[0].id;
                document.getElementById("firstName").value  = obj[0].firstName;
                document.getElementById("lastName").value  = obj[0].lastName;
                document.getElementById("schoolName").value  = obj[0].schoolName ;
                document.getElementById("age").value  = obj[0].age ;
                if( obj[0].gender=='male'){
                  document.getElementById("male").value  = obj[0].gender ;
                  document.getElementById("male").checked="true" ;
                }
                else if(obj[0].gender=='female'){
                  document.getElementById("female").value  = obj[0].gender ;
                  document.getElementById("female").checked="true" ;
                }
                
                // document.getElementById("photo").value  = obj[0].photo ;
                
                


                document.getElementById("tripType").value  = obj[0].tripType ;
                document.getElementById("location").value  = obj[0].location ;

              }
          })

        }
    });

//   function EditChildren() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
      
//      document.getElementById("addStudent").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("GET",'/studentParent/UpdateChildren', true);
//   xhttp.send();
// }
// function myFunction() {
//   var addStudent = document.getElementById("addStudent");
//   var updateStudent= document.getElementById("updateStudent");
//   if (addStudent.style.display === "block") {
//     addStudent.style.display = "none";
//     updateStudent.style.display = "block";
//   } else {
//     addStudent.style.display = "block";
//     updateStudent.style.display = "none";
//   }
// }
</script>

@endsection
@endsection
