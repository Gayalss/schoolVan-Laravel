<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="footer.css"> -->
    
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/Bootstrap.css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/footer.css') }}">
   {{--  <link rel="stylesheet" type="text/css" href="{{ url('CSS/fontawesome.all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('CSS/brands.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

    <link rel="stylesheet" type="text/css" href="{{ url('CSS/parsley.css
    ') }}">
     {{-- <script src="{{ asset('js/app.js') }}" ></script> --}}
    <title>Log in!</title>
  </head>
  <body style="background-color: #F4FCFF">
   
<!-- Navigation bar starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Skoolvan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active"><a class="nav-link" href="{{url('#')}}">Sign Up</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('#')}}">Log in</a></li>
    </ul>
  </div>
</nav>
<!--Navigation bar ends -->

<!--Body starts -->

<h1 style="text-align: center;margin: 20px">Sign Up</h1>

@yield('signUpContent')

<!-- Body ends -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script  src="{{ url('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous') }}"></script> --}}
    <script type="text/javascript" src="{{ url('Js/jquery.min.js') }}"></script>
    
    {{-- <script src="{{ url('JS/fontawseome.all.min.js') }}"></script> --}}
    {{-- <script src="{{ url('JS/brands.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
    <script type="text/javascript" src="{{ url('JS/Bootstrap.js/bootstrap.js') }}"></script>

    
    <script type="text/javascript" src="{{ url('Js/parsley.min.js') }}"></script>

   <!-- <script type="text/javascript" src="js/mousescroll.js"></script> 
   <script type="text/javascript" src="js/smoothscroll.js"></script>  -->
@yield('ValidationScript')
  <!-- Footer starts -->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="#"><img class="img-responsive" src="{{ asset('Images/SchoolBusIcon.png') }}" alt="" style="width:50px;height: 50px">
          </a>
        </div><br>
        <label style="color: white">SkoolVan</label><br>
        <a class="twitter" href="{{url('www.twitter.com')}}"><i class="fab fa-twitter" style="color:white;margin:20px "></i></a>
        <a class="facebook" href="{{url('www.facebook.com')}}"><i class="fab fa-facebook" style="color:white;margin:20px "></i></a>
        <a class="linkedin" href="{{url('www.linkedin.com')}}"><i class="fab fa-linkedin" style="color:white;margin:20px "></i></a>

      </div>
    </div>
    <div class="footer-bottom" style="background-color:#6CCFE0">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; Gaiya.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="{{URL::asset('http://www.themeum.com/')}}">Gayal</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Ends -->
  </body>
  
</html>