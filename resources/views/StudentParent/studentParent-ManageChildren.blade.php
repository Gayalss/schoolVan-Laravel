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
{{-- <div class="row">
    <div class="form-group col-md-4">
              
    </div> 
    <div class="form-group col-md-4 col-xs-12">
      <label for="selectStudent">Select Student</label>
      <select id="selectStudent" class="form-control dynamic" data-dependent="state">
        @foreach($Childrens as $Children)
          <option selected value="{{$Children->firstName}}">{{$Children->firstName}} {{$Children->lastName}}</option>
        @endforeach
              
      </select>
    </div>
    <div class="form-group col-md-4">
              
    </div>  
</div> --}} 
<div class="card" style="margin: 5%"> <!-- First Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"><a href="{{'/studentParent/manageChildren/create'}}" class="btn btn-success" style="margin-left:35%">Add Children</a>
      </div>
      
    </div>

    <div class="container">
      <hr>
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align: center; margin:auto;margin-top:10px;margin-bottom:10px">Childrens</h1>
          <table  class="table table-hover table-responsive-lg">
            <thead>
              <tr>
          
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">School</th>
                <th scope="col">Age</th>
                <th scope="col">Trip Type</th>
                <th scope="col">Pick up location</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach($Childrens as $Children)
                <tr class="table table-bordered table-striped table-light">
            
                  <td><img src="{{url('Images/Parent/Childrens')}}/{{$Children->photo}}" width="100"></td>
                  <td>{{$Children->firstName}} {{$Children->lastName}}</td>
                  <td>{{$Children->schoolName}}</td>
                  <td>{{$Children->age}}</td>
                  <td>{{$Children->tripType}}</td>
                  <td>{{$Children->location}}</td>
                  <td>
                  <form action="{{route('manageChildren.destroy', $Children->id)}}" method="POST">
                    {{@csrf_field()}}

                    @method('DELETE')

                    {{-- <a class="btn btn-sm btn-success" href="{{route('', $Children->id)}}">Show</a> --}}
                    <a class="btn btn-sm btn-warning btn-block" href="{{route('manageChildren.edit', $Children->id)}}">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger btn-block">Delete</button>
                  </form>
                  </td>

                </tr>
              @endforeach
            </tbody>
          
          </table>
        </div>
      </div>

    </div>
    

    
  </div>
</div> <!-- First Card Ends -->

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
function myFunction() {
  var addStudent = document.getElementById("addStudent");
  var updateStudent= document.getElementById("updateStudent");
  if (addStudent.style.display === "block") {
    addStudent.style.display = "none";
    updateStudent.style.display = "block";
  } else {
    addStudent.style.display = "block";
    updateStudent.style.display = "none";
  }
}
</script>

@endsection
@endsection
