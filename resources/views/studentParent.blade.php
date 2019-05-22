@extends('layouts.studentParentLayout')

@section('active1')
active
@endsection
@section('BodyContent')


<div class="row">
  <h3 style="margin: 20px"> Welcome {{ Auth::user()->firstName }}</h3>
  <button type="button" class="btn btn-primary" style="float: right;margin: 10px">
    Notifications <span class="badge badge-danger">9</span>
    <span class="sr-only">unread messages</span>
    </button>
   


</div>



<!-- <span> -->
  <div class="row">
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
  <!--  <div class="form-row">
    <div class="form-group col-md-4 col-xs-12 ">
              
    </div> 
    <div class="form-group col-md-4 col-xs-12">
      <div class="well">
      <div id="datetimepicker4" class="input-append">
      <input data-format="yyyy-MM-dd" type="text"></input>
      <span class="add-on">
       <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div>
</div>
    </div>
    <div class="form-group col-md-4 col-xs-12">
              
    </div>  
  </div>  -->
  

  
<!-- </span> -->
<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      
    
     <!--  <div class="row"> -->
        
        <form style="margin:5% auto">
          <div class="row">
            <h3 style="text-align: center; margin:auto;"> Children Details</h3>
            <!-- <div class="form-group col-md-6">
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
              
            </div> -->
            
            <div class="form-group col-md-4">
              <label for="photo">Photo</label>
              {{-- <img src="../Images/schoolChildrenPhoto.jpg" class="img-fluid" alt="Responsive image"> --}}
            </div>
            <div class="form-group col-md-4">
              <div class="row">
                <label for="firstName">Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="First Name" value="Sineth Ramanayake" >                
              </div>
              <div class="row">
                <label for="school">School</label>
                <input type="text" class="form-control" id="school" value="Mahanama College Colombo 03">                
              </div>
              
            </div>
            <div class="form-group col-md-4">
              <!-- <label for="photo">Photo</label>
              <img src="../Images/schoolVanimage.jpg" class="img-fluid" alt="Responsive image"> -->
            </div>
          
           <!--  <div class="form-group col-md-4" style="border-left:1px solid lightgrey;height:500px;margin: 0px">
               
                <h4>dsdsd</h4>
            </div>
            <div class="form-group col-md-4" style="border-left:1px solid lightgrey;height:500px;margin: 0px">
                
                <h4>sddsd</h4>
            </div> -->

            
      

          </div><!-- End of first row -->

          <hr>  

          <div class="row"><!--  Start of second row -->
             <h3 style="text-align: center; margin:auto;"> School Van Details</h3><br>
             <div class="form-group col-md-4">
              <label for="photo">Photo</label>
              {{-- <img src="../Images/schoolVanimage.jpg" class="img-fluid" alt="Responsive image"> --}}
            </div>
            <div class="form-group col-md-4">
              <div class="row">
                <label for="schoolVan">School Van</label>
                <input type="text" class="form-control" id="schoolVan"  value="Wp 56-9293" >                
              </div>
              <div class="row">
                <label for="color">Color</label>
                <input type="text" class="form-control" id="color" value="White">                
              </div>
              <div class="row">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating" value="4.5">                
              </div>
              <div class="row">
                <label for="comment">Comment</label>
                <input type="text" class="form-control" id="comment" value="">  
                 <button class="btn btn-primary" style="margin-top: 2px">Submit</button>                
              </div>
              
            </div>
            <div class="form-group col-md-4">
              <!-- <label for="photo">Photo</label>
              <img src="../Images/schoolVanimage.jpg" class="img-fluid" alt="Responsive image"> -->
            </div>
          </div><!--  End of second row -->
          <div class="row">
                <button class="btn btn-success" style="margin-top: 2px">View Comments</button>                
          </div>
          <hr>  
          
          <div class="row"><!--  Start of Third row -->
            <h3 style="text-align: center; margin:auto;">Driver's Details</h3>
            <div class="form-group col-md-4">
              <label for="photo">Photo</label>
              {{-- <img src="../Images/SchoolVanDriver.jpg" class="img-fluid" alt="Responsive image"> --}}
            </div>
            <div class="form-group col-md-4">
              <div class="row">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  value="Nimal Perera" >                
              </div>
              <div class="row">
                <label for="mobileNumber">Mobile Number</label>
                <input type="number" class="form-control" id="mobileNumber" value="07728289282">                
              </div>
              <div class="row">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" id="rating" value="4.5">                
              </div>
              <div class="row">
                <label for="comment">Comment</label>
                <input type="text-area" class="form-control" id="comment" value=" ">
                <button class="btn btn-primary" style="margin-top: 2px">Submit</button>                
              </div>
              

            </div>
            
            <div class="form-group col-md-4">
              <!-- <label for="photo">Photo</label>
              <img src="../Images/schoolVanimage.jpg" class="img-fluid" alt="Responsive image"> -->
            </div>
          </div><!--  End of Third row -->
          <div class="row">
                <button class="btn btn-success" style="margin-top: 2px">View Comments</button>                
          </div>

          
          
            
            
            
          
        </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- First Card Ends -->
@endsection