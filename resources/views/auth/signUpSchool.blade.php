@extends('layouts.signUpUser')



@section('signUpContent')

<div class="card" style="margin: 5%" > <!-- Card Starts -->
  <div class="card-body" style="margin: 2.5px;height:auto;">
    <div class="container">
      <h3 style="text-align: center; margin:auto;"> School's Details</h3>
     <!--  <div class="row"> -->
        
        <form style="margin:5% auto" method="post" action="{{ route('School.register.submit') }}"  data-parsley-validate>
           {{@csrf_field()}}
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="schoolName">School Name</label>
              <input type="text" class="form-control" name="schoolName" id="schoolName" placeholder="School Name" data-parsley-required data-parsley-required-message="Please enter your the School Name." >
            </div>
            <div class="form-group col-md-6">
              <label for=">address">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Address" data-parsley-required data-parsley-required-message="Please enter the School's Address." data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup">
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" data-parsley-required data-parsley-required-message="Please enter your email Address." data-parsley-type="email" data-parsley-trigger="keyup">
            </div>
            <div class="form-group col-md-6">
              <label for="contactNumber">Contact Number</label>
              <input type="number" name="contactNumber" class="form-control" id="contactNumber" placeholder="Contact Number" data-parsley-required data-parsley-required-message="Please enter School Contact Number."data-parsley-type="number" data-parsley-maxlength="10">
            </div>
            <div class="form-group col-md-6">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="password"
              {{-- data-parsley-minlength="8"
              data-parsley-errors-container=".errorspannewpassinput"
              data-parsley-required-message="Please enter your password."
              data-parsley-uppercase="1"
              data-parsley-lowercase="1"
              data-parsley-number="1"
              data-parsley-special="1" --}}
              data-parsley-required 
              />
              <span class="errorspannewpassinput"></span>
            </div>
            <div class="form-group col-md-6">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" name="confirmPassword" class="form-control" id="Confirmpassword" placeholder="Confirm Password"
              data-parsley-equalto="#password"
              {{-- data-parsley-minlength="8"
              data-parsley-errors-container=".errorspanconfirmnewpassinput"
              data-parsley-required-message="Please Confirm your password."   --}}  
              data-parsley-required />
              <span class="errorspanconfirmnewpassinput"></span>
            </div>
          </div>
          
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" id="City" placeholder="City" data-parsley-required data-parsley-required-message="Please enter your City.">
            </div>
            <div class="form-group col-md-4">
              <label for="province">Province</label>
              <select id="Province" name="province" class="form-control">
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
