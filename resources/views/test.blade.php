<!-- <div class="container" id="updateStudent"> -->

      <h3 style="text-align: center; margin:auto;">Edit Student's Details</h3>
      <!-- <div class="row"> -->
        
        <form style="margin:5% auto" method="post" action=""  data-parsley-validate enctype="multipart/form-data">
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
              {{-- <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success btn-md btn-block">Add Children</button>
              </div> --}}
              <div class="form-group col-md-4">
                <button type="button" class="btn btn-warning btn-md btn-block">Update Children</button>
              </div>
              {{-- <div class="form-group col-md-4">
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
      
    <!-- </div> -->