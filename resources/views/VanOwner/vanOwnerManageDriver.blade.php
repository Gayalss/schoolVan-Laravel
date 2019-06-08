@extends('layouts.schoolVanOwnerLayout')
@section('active6')
active
@endsection

@section('BodyContent')

<div class="container" style="margin:20px"></div>
<div class="container">
  @if(session()->has('success'))
    
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <h4 class="alert-heading">Driver!</h4>
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
<div class="container">
  <br />
  <br />
  <br />
  <h2 align="center">Search Drivers</h2><br />
  <div class="form-group">
    <div class="input-group">
      {{-- <span class="input-group-addon">Search</span> --}}
      <input type="text" name="searchDriver" id="searchDriver" placeholder="Search Drivers" class="form-control" />
    </div>
  </div>
  <br />
  <div id="resultDriver"></div>
</div>
<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <h1 style="text-align: center; margin:auto;margin-top:10px;margin-bottom:10px">Drivers</h1>
      <table  class="table table-hover table-responsive-lg tableSearch">
        <thead>
          <tr>

            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Province</th>
            <th scope="col">City</th>
            <th scope="col">Action</th>
            

          </tr>
        </thead>
        <tbody class="tbody">
          
        </tbody>
        

      </table>
    </div>
  </div>

</div>

<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    {{-- <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"><a href="{{route('routes.create')}}" class="btn btn-success" style="margin-left:35%">Add Route</a>
      </div>
      
    </div> --}}

    <div class="container">
      <hr>
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align: center; margin:auto;margin-top:10px;margin-bottom:10px">Vehicles</h1>
          <table  class="table table-hover table-responsive-lg">
            <thead>
              <tr>
          
                <th scope="col">Photo</th>
                <th scope="col">Vehicle Type</th>
                <th scope="col">Vehicle Model</th>
                <th scope="col">Color</th>
                <th scope="col">Total Seats</th>
                <th scope="col">Number Plate</th>
                <th scope="col">Manufactured Year</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              {{-- @foreach($Vehicles as $Vehicle)
                <tr class="table table-bordered table-striped table-light">
            
                  <td><img src="{{url('Images/vanOwner/Vehicles')}}/{{$Vehicle->photo}}" width="100"></td>
                  <td>{{$Vehicle->vehicleType}}</td>
                  <td>{{$Vehicle->vehicleModel}}</td>
                  <td>{{$Vehicle->color}}</td>
                  <td>{{$Vehicle->totalSeats}}</td>
                  <td>{{$Vehicle->numberPlate}}</td>
                  <td>{{$Vehicle->manufacturedYear}}</td>
                  <td>
                  <form action="{{route('manageVan.destroy',$Vehicle->id)}}" method="POST">
                    {{@csrf_field()}}

                    @method('DELETE')

                    
                    <a class="btn btn-sm btn-warning btn-block" href="{{route('manageVan.edit', $Vehicle->id)}}">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger btn-block">Delete</button>
                  </form>
                  </td>

                </tr>
              @endforeach --}}
            </tbody>
          
          </table>
        </div>
      </div>

    </div>
  </div>
</div> <!-- First Card Ends -->

@section('Scripts')

<script>
$(document).ready(function(){
  function load_data(){
    document.getElementById("Nothing").html="Nothing to Show"
  };
  function load_data(searchDriver)
  {
    // console.log("hi");
    $.ajax({
      url:"{{route('manageDriver.search')}}",
      method:"POST",
      data:{
        "_token": "{{ csrf_token() }}",
        searchDriver:searchDriver,
      },
      // data:{query:query},
      success:function(data)
      {
            
        // $('.tbody').html(result);
        
          // console.log(result);

         //  $.each(result,function(value){
         //   var NewRow = '<tr><td">'+value.photo+'</td>';
         //   NewRow += '<td>'+value.firstName+'</td>';
         //   NewRow += '<td>'+value.email+'</td>';
         //   NewRow += '<td>'+value.mobileNUmber+'</td>';
         //   NewRow += '<td>'+value.province+'</td>';
         //   NewRow += '<td>'+value.city+'</td>';
         //   NewRow += '</tr>';

         //   $(".tableSearch").append(NewRow);
         // });
         
           //  var items = [];  --Here--
           //  var obj = JSON.parse(result);
           //  console.log(obj[0].firstName);

           //  $.each(obj,function(key,value){
           //    console.log(value);
           //    console.log(value);
           // var NewRow = '<tr><td">'+value.photo+'</td>';
           // NewRow += '<td>'+value.photo+'</td>';
           // NewRow += '<td>'+value.firstName+'</td>';
           // NewRow += '<td>'+value.email+'</td>';
           // NewRow += '<td>'+value.mobileNumber+'</td>';
           // NewRow += '<td>'+value.province+'</td>';
           // NewRow += '<td>'+value.city+'</td>';
           // NewRow += '</tr>';

           // $(".tableSearch").append(NewRow);
           // });   --end--

               
            //   items.push("<tr>");
            //   items.push("<td>+""+obj.photo+</td>");
            //   items.push("<td>+value.firstName+</td>");
            //   items.push("<td>+obj.email+</td>");
            //   items.push("<td>+obj.mobileNUmber+</td>");
            //   items.push("<td>+obj.province+</td>");
            //   items.push("<td>+obj.city+</td>");
            //   items.push("</tr>");

            

            // $("<tbody/>",{html:items.join("")}).appendTo("tableSearch");

         

       

        // document.getElementById("photo").src  = "Images/vanDriver/ProfilePictures/"+obj[0].photo ;
        // document.getElementById("firstName").value  = obj[0].firstName+" "+
        // obj[0].lastName;
        console.log(data);
        
        var SearchResult = '';
        data.forEach(element=>{
         
          SearchResult += '<tr><td><img src={{url('Images/vanDriver/ProfilePictures')}}/'+element.photo+' width="100"></td><td>' +element.firstName+'</td><td>'+element.email + '</td><td>'+element.mobileNumber+ '</td><td>'+element.province+'</td><td>'+element.city+'</td><td>'+'<button type="submit" class="btn btn-success btn-block">Add </button>'+'</td></tr>';
        });

        console.log(SearchResult);
        // SearchResult+='</tbody>'
        $('.tbody').html(SearchResult);

        

      }
    });
  }
  
  $('#searchDriver').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      // console.log(search);
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>


@endsection

@endsection
