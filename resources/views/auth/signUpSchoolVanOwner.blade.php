@extends('layouts.signUpUser')



@section('signUpContent')
<div class="card" style="margin: 5%"> <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;"> School Van Owner's Details</h3>
     <!--  <div class="row"> -->
        
        <form style="margin:5% auto"  method="post" action="{{ route('vanOwner.register.submit') }}"  data-parsley-validate enctype="multipart/form-data">
          {{@csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" data-parsley-required data-parsley-required-message="Please enter your First Name." data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" data-parsley-required data-parsley-required-message="Please enter your Last Name."data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
            </div>
            <div class="form-group col-md-6">
              <label for="address">Address</label>
              <textarea class="form-control" name="address" id="Address" placeholder="Address"  data-parsley-required data-parsley-required-message="Please enter your Address." data-parsley-trigger="keyup"></textarea>
              {{-- <input type="text" class="form-control" id="Address" placeholder="Address"  data-parsley-required data-parsley-required-message="Please enter your Address." data-parsley-trigger="keyup"> --}}
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" data-parsley-required data-parsley-required-message="Please enter your email Address." data-parsley-type="email" data-parsley-trigger="keyup">
            </div>
            <div class="form-group col-md-6">
              <label for="homeNumber">Home Number</label>
              <input type="number" class="form-control" name="homeNumber" id="homeNumber" placeholder="Home Number" data-parsley-required data-parsley-required-message="Please enter your Home Number."data-parsley-type="number" data-parsley-maxlength="10">
            </div>
            <div class="form-group col-md-6">
              <label for="mobileNumber">Mobile Number</label>
               <input type="number" name="mobileNumber" class="form-control" id="mobileNumber" placeholder="Mobile Number" data-parsley-required data-parsley-required-message="Please enter your Mobile Number."data-parsley-pattern="^(?:0|94|\+94|0094)?(?:(70||71|72|75|76|77|78)|(0|2|3|4|5|7|9)|7(0|1|2|5|6|7|8)\d)\d{6}$">
            </div>
            
            

          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" id="City" placeholder="City" data-parsley-required data-parsley-required-message="Please enter your City.">
            </div>
            <div class="form-group col-md-4">
              <label for="province">Province</label>
              <select id="province" class="form-control" name="province">
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
            
            <div class="form-group col-md-6">
              <div>
                <label style="margin-right:10px;">Gender</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="gender" class="custom-control-input" checked="">
                <label class="custom-control-label" for="customRadio1">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="gender" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Female</label>
              </div>
                
            </div>
            {{-- <div class="form-group col-md-6">
                <label for="Age">photo</label>
                <div class="input-group mb-3">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>

                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
            </div> --}}
            <div class="form-group col-md-6">
              <label for="photo">Photo</label>
              <input type="file" class="form-control-file" id="photo" name="photo" placeholder="photo">
            </div>
            
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="password" name="password" 
              data-parsley-minlength="8"
              data-parsley-errors-container=".errorspannewpassinput"
              data-parsley-required-message="Please enter your password."
              data-parsley-uppercase="1"
              data-parsley-lowercase="1"
              data-parsley-number="1"
              data-parsley-special="1"
              data-parsley-required 
              />
              <span class="errorspannewpassinput"></span>
            </div>
            <div class="form-group col-md-6">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword" 
              data-parsley-equalto="#password"
              data-parsley-minlength="8"
              data-parsley-errors-container=".errorspanconfirmnewpassinput"
              data-parsley-required-message="Please Confirm your password."    
              data-parsley-required />
              <span class="errorspanconfirmnewpassinput"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3"></div>
            <button type="submit" class="btn btn-primary col-md-4 col-sm-12 col-xs-12" style="margin:50px auto ;  height:50px">Sign up
            </button>
            <div class="col-md-3"></div>

          </div>
        </form>
      <!-- </div> -->
      
    </div>
  </div>
</div> <!-- First Card Ends -->
@endsection
@section('ValidationScript')

<script>
//has uppercase
window.Parsley.addValidator('uppercase', {
  requirementType: 'number',
  validateString: function(value, requirement) {
    var uppercases = value.match(/[A-Z]/g) || [];
    return uppercases.length >= requirement;
  },
  messages: {
    en: 'Your password must contain at least (%s) uppercase letter.'
  }
});

//has lowercase
window.Parsley.addValidator('lowercase', {
  requirementType: 'number',
  validateString: function(value, requirement) {
    var lowecases = value.match(/[a-z]/g) || [];
    return lowecases.length >= requirement;
  },
  messages: {
    en: 'Your password must contain at least (%s) lowercase letter.'
  }
});

//has number
window.Parsley.addValidator('number', {
  requirementType: 'number',
  validateString: function(value, requirement) {
    var numbers = value.match(/[0-9]/g) || [];
    return numbers.length >= requirement;
  },
  messages: {
    en: 'Your password must contain at least (%s) number.'
  }
});

//has special char
window.Parsley.addValidator('special', {
  requirementType: 'number',
  validateString: function(value, requirement) {
    var specials = value.match(/[^a-zA-Z0-9]/g) || [];
    return specials.length >= requirement;
  },
  messages: {
    en: 'Your password must contain at least (%s) special characters.'
  }
});
</script>

@endsection
