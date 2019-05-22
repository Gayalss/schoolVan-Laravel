<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" type="text/css" href="CSS/Bootstrap.css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/Bootstrap.css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/footer.css') }}">
   {{--  <link rel="stylesheet" type="text/css" href="{{ url('CSS/fontawesome.all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('CSS/brands.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

    <title>SignUp!</title>
  </head>
  <body style="background-color: #F4FCFF">
   

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Skoolvan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active"><a class="nav-link" href="/UserSignUp/create">Sign Up</a></li>
      <li class="nav-item"><a class="nav-link" href="/UserLogIn/create">Log in</a></li>
    </ul>
  </div>
</nav>



<h1 style="text-align: center;margin: 20px">Sign Up</h1>
<div class="card" style="margin: 5%">
  <div class="card-body" style="margin: 2.5px;height:450px">
    <div class="container" style="size: 50%">
      <div class="row">
        <div class="form"  style="margin:0 auto">
          <form method="post"  action="{{ route('UserSignUp.store') }}">
           {{@csrf_field()}}
              <div class="form-group">
           <!-- <label for="exampleFormControlSelect1">Selct Account type</label> -->
                <h1 style="text-align: center;">Select Account type</h1><br><br>
                <select class="form-control" id="accountType" name="userType" >
                  <option value="SchoolVanOwner">School Van Owner</option>
                  <option value="Parent">Parent</option>
                  <option value="School">School</option>
                  <option value="SchoolVanDriver">School Van Driver</option>     
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block scroll">Next</button>
              </div> 
          </form>    
            <label>Do you have an account?<a href="/UserLogIn/create" style="color:blue"> Log In here</a></label> 
        </div>
      </div>
      
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="{{ url('Js/jquery.min.js') }}"></script>
    
    {{-- <script src="{{ url('JS/fontawseome.all.min.js') }}"></script> --}}
    {{-- <script src="{{ url('JS/brands.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
    <script type="text/javascript" src="{{ url('JS/Bootstrap.js/bootstrap.js') }}"></script>

    
    <script type="text/javascript" src="{{ url('Js/parsley.min.js') }}"></script>
   <!-- <script type="text/javascript" src="js/mousescroll.js"></script> 
   <script type="text/javascript" src="js/smoothscroll.js"></script>  -->
    


   </script>
    <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="{{ asset('Images/SchoolBusIcon.png') }}" alt=""
          style="width:50px;height: 50px"></a>
        </div><br>
        <label style="color: white">SkoolVan</label><br>
       <!--  <div class="social-icons">
       
          <ul style="list-style:inline;">           
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>            
            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        
        </div> -->
        <a class="twitter" href="#"><i class="fab fa-twitter" style="color:white;margin:20px "></i></a>
        <a class="facebook" href="#"><i class="fab fa-facebook" style="color:white;margin:20px "></i></a>
        <a class="linkedin" href="#"><i class="fab fa-linkedin" style="color:white;margin:20px "></i></a>

      </div>
    </div>
    <div class="footer-bottom" style="background-color:#6CCFE0">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; Gaiya.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Gayal</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  </body>
  
</html>