<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="footer.css"> -->
    {{-- <link rel="stylesheet" type="text/css" href="../CSS/Bootstrap.css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/Bootstrap.css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('CSS/footer.css') }}">
   {{--  <link rel="stylesheet" type="text/css" href="{{ url('CSS/fontawesome.all.min.css') }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('CSS/brands.min.css') }}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> 

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
      <li class="nav-item @yield('active1')"><a class="nav-link" href="{{ route('studentParent.dashboard') }}">Home</a></li>
      <li class="nav-item @yield('active2')"><a class="nav-link" href="{{ route('studentParent.attendance') }}">Attendance</a></li>
      <li class="nav-item @yield('active3')"><a class="nav-link" href="{{ route('studentParent.location') }}">Location</a></li>
      <li class="nav-item @yield('active4')"><a class="nav-link" href="{{ route('studentParent.newVans') }}">New School Vans</a></li>
      <li class="nav-item @yield('active5')"><a class="nav-link" href="#">Settings</a></li>
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->firstName }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
          </div>
      </li>
    </ul>
  </div>
</nav>
<!--Navigation bar ends -->

<!--Body starts -->

@yield('BodyContent')




<!-- Body ends -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="{{ url('Js/jquery.min.js') }}"></script>
    
    {{-- <script src="{{ url('JS/fontawseome.all.min.js') }}"></script> --}}
    {{-- <script src="{{ url('JS/brands.min.js') }}"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
    <script type="text/javascript" src="{{ url('JS/Bootstrap.js/bootstrap.js') }}"></script>

    
    {{-- <script type="text/javascript" src="{{ url('Js/parsley.min.js') }}"></script> --}}
   <!-- <script type="text/javascript" src="js/mousescroll.js"></script> 
   <script type="text/javascript" src="js/smoothscroll.js"></script>  -->
   
  
   {{-- <script type="text/javascript">

     function myfunction(){
      var selectedAccountType=document.getElementById('accountType').value;
      alert(selectedAccountType);


    
     $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });
     

   </script> --}}
  <!-- Footer starts -->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="{{ asset('Images/SchoolBusIcon.png') }}" alt=""
          style="width:50px;height: 50px"></a>
        </div><br>
        <label style="color: white">SkoolVan</label><br>
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
  <!-- Footer Ends -->
  </body>
  
</html>