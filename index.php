<?php
session_start(); 
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
}

if(isset($_SESSION['ADMIN_USERNAME'])){
    header("Location: admin/dashboard.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
  
    <link rel="stylesheet" type="text/css" href="css/style.css">

  <style type="text/css">
      .carousel-caption {
          position: relative;
          left: 0;
          top: 0;
      }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome to Street30!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Street30</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
            
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">

  </ul>
  </div>


  </div>
</nav>




  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators my-4">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="burger.jpg" class="d-block w-100" alt="first slide">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="font-size:40px;"> Please Login to experience full support </h5>
            <p> if you don't have any account yet, please register </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="pizza.jpg" class="d-block w-100" alt="second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color:black;font-size:40px;">Best Food Best Quality</h5>

        </div>
      </div>
      <div class="carousel-item">
        <img src="fries.jpg" class="d-block w-100" alt="third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5 style="font-size:40px;">Order hurry Free home delivery</h5>

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/609834d7b1d5182476b73605/1f598srd4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
