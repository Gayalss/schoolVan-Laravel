@extends('layouts.schoolVanOwnerLayout')
@section('active1')
active
@endsection

@section('BodyContent')

<!--Body starts -->

<span style="float: left;"><h1 >Welcome {{ Auth::user()->firstName }}</h1></span>

<br><br>

<!-- <span> -->
  <div class="container">
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


    
  </div> 


  
<!-- </span> -->
<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;"> School Van Details</h3>
     <!--  <div class="row"> -->
        
        <form style="margin:5% auto">
          <div class="row">
            <div class="form-group col-md-6">
              <div class="row">
                <label for="firstName">Total Available Seats</label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="13" >                
              </div>
              <div class="row">
                <label for="firstName">Rating</label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="4.5">                
              </div>
              <div class="row">
                <label for="lastName">Comments</label>
                <input type="text-area" class="form-control" id="lastName" placeholder="Last Name" value="This is a Very good school van service in srilanka">           
              </div>
              
            </div>
            
            <div class="form-group col-md-6">
              <label for="photo">Photo</label>
              {{-- <img src="../Images/schoolVanimage.jpg" class="img-fluid" alt="Responsive image"> --}}
            </div>
            
            

          </div>
          
          
            
            
            
          
        </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- First Card Ends -->

<div class="card" style="margin: 5%"> <!-- Second Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;"> Driver's Details</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto">
          <div class="row">
            <!-- <div class="form-group col-md-6 ">
              <label for="tripType">Vehicl Type</label>
              <select id="tripType" class="form-control">
                <option selected>Car</option>
                <option>Van</option>
                <option>Bus</option>
              </select>
            </div>  --> 
            <div class="form-group col-md-6">
              <div class="row">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" value="Nimal" >
              </div><br>
              <div class="row">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" value="Perera">
              </div><br>
              <div class="row">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="color" value="205/38 Sethsiri pedesa Maharagama">
              </div><br>
              <div class="row">
                <label for="mobileNumber">Mobile Number</label>
                <input type="number" class="form-control" id="mobileNumber" value="0772722728">
              </div><br>
              <div class="row">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating" value="4.2">
              </div><br>
              <div class="row">
                <label for="Comments">Comments</label>
                <input type="text" class="form-control" id="comments" value="He is a very good driver">
              </div>
                
            </div>
            <div class="form-group col-md-6">
              <label for="photo">Photo</label><br>
              {{-- <img src="../Images/SchoolVanDriver.jpg" class="img-fluid" alt="Responsive image"> --}}
            </div> 
          </div>
          
          
          <!-- <div class="form-row">
            <div class="form-group col-md-6">
              <label for="City">City</label>
              <input type="text" class="form-control" id="City">
            </div>
            <div class="form-group col-md-4">
              <label for="Province">Province</label>
              <select id="Province" class="form-control">
                <option selected>Western Province</option>
                <option>Central Province</option>
                <option>Southern Province</option>
                <option>Uva Province</option>
                <option>Sabaragamuwa Province</option>
                <option> North Western Province</option>
                <option>North Central Province</option>
                <option>Northern Province</option>
                <option>Eastern Province</option>

              </select>
            </div>
          </div> -->
          <!-- <div class="row">
            <div class="col-md-3"></div>
            <button type="submit" class="btn btn-primary col-md-6 col-sm-12 col-xs-12" style="margin:50px auto ;  height:50px">Sign in
            </button>
            <div class="col-md-3"></div>

          </div> -->
        </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- Second Card Ends -->


<div class="card" style="margin: 5%"> <!-- Third Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;"> Student's Details</h3><br>
      <h5> Total Number of students=24</h5>

      <!-- <div class="row"> -->
        
        <!-- <form style="margin:5% auto">
          <div class="form-row">
            <div class="form-group col-md-6 col-lg-6">
              <label for="schools">Schools</label>
              <select id="schools" class="form-control">
                <option selected>Mahanama College Comlombo 03</option>
                <option>Isipathana College Comlombo 03</option>
                <option>Thurstan College Comlombo 03</option>
              </select>
              <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="button">Add School</button></span>
              
            </div> 
            <div class="form-group col-md-6">
              <label for="checkPoint">Check Point</label>
              <input type="Search" class="form-control" id="checkPoint" placeholder="Check Point">
              <span  style="float: right; margin-top:5px "><button class="btn btn-primary " type="submit">Search</button></span>
              

            </div>
            
            
           
           -
          </div>
          
          
        </form> -->
 
<table class="table table-hover table-responsive-lg" style="width:">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Parent's Name</th>
      <th scope="col">Student's Name</th>
      <th scope="col">Vehicle</th>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>@twitter</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>kbhjbhb</td>
    </tr>
  </tbody>
</table>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- Card Ends -->
<!-- Body ends -->


@endsection
