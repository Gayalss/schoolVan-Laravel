<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/Bootstrap.css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>Log in!</title>
  </head>
  <body style="background-color: #F4FCFF">
   

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Skoolvan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="signup.html">Sign Up</a></li>
      <li class="nav-item active"><a class="nav-link" href="login.html">Log in</a></li>
    </ul>
  </div>
</nav>



<h1 style="text-align: center;margin: 20px">Log in</h1>
<div class="card" style="margin: 5%">
  <div class="card-body" style="margin: 2.5px;height:450px">
    <div class="container" style="size: 50%">
      <div class="row">
        <form style="margin:0 auto">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Log In</button><br>
          <label>Forgot password??<a href="" style="color:blue"> Click here</a></label> <br>
          <label>Don't you have an account?<a href="" style="color:blue"> Sign up here</a></label> 
        </form>
      </div>
      
    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

    <script type="text/javascript" src="JS/Bootstrap.js/bootstrap.min.js"></script>
   <!-- <script type="text/javascript" src="js/mousescroll.js"></script> 
   <script type="text/javascript" src="js/smoothscroll.js"></script>  -->
   <script type="text/javascript">

     function myfunction(){
      var selectedAccountType=document.getElementById('accountType').value;
      alert(selectedAccountType);

     }
     

   </script>
    <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="Images/SchoolBusIcon.png" alt=""
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
  </body>
  
</html>