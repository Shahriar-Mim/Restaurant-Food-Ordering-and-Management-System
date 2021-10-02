
<?php

require_once "config.php";
session_start() ; 

if(!isset($_SESSION['username'])) {
    header("Location: index.php"); //Redirect the user

}
?> 

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Reviews and Ratings!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">Street30</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
           
        <li class="nav-item">
            <a class="nav-link" href="cart.php">Buy Food</a>
        </li>
        <li class="nav-item">
                      <a class="nav-link" href="chat.php">Chat with admin</a>
                  </li>
        <li class="nav-item">
            <a class="nav-link" href="rating.php">Give Reviews and Rating</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"></a>
        </li>
           
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>




    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>


<div class="container">
    <div class="row">
 
<form action="" method="post">
 
    <div>
        <h3>Pizza</h3>
    </div>
    
    
    <div class="container" >
    <label for="comment"><b>Reviews By users:</b></label>
    <?php
   $sql1 = "SELECT username,rating,review FROM rating_02 WHERE foodname='Pizza'" ; 
   $result = mysqli_query($conn, $sql1);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
       echo "<br>";
   echo "<strong>".$row['username']."</strong>" ." writes ". $row['review'] .". Gives ". $row['rating']." rating";
   
       }   
   } 
   ?>
    </div>

</div>
</div>
<!-- -------------------------------------------------------->
<br>
<br>
<div class="container">
    <div class="row">
 
<form action="" method="post">
 
    <div>
         <h3>Burger</h3>
    </div>

  
    <div class="container" >
    <label for="comment"><b>Reviews By users:</b></label>
    <?php
   $sql1 = "SELECT username,rating,review FROM rating_02 WHERE foodname='Burger'" ; 
   $result = mysqli_query($conn, $sql1);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
       echo "<br>";
   echo "<strong>".$row['username']."</strong>" ." writes ". $row['review'] .". Gives ". $row['rating']." rating";
   
       }   
   } 
   ?>
    </div>
  
</div>
</div>
<!-- -------------------------------------------------------->
<br>
<br>
<div class="container">
    <div class="row">
 
<form action="" method="post">
 
    <div>
        <h3>Fries</h3>
    </div>
  
    <div class="container" >
    <label for="comment"><b>Reviews By users:</b></label>
    <?php
   $sql1 = "SELECT username,rating,review FROM rating_02 WHERE foodname='Fries'" ; 
   $result = mysqli_query($conn, $sql1);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
       echo "<br>";
   echo "<strong>".$row['username']."</strong>" ." writes ". $row['review'] .". Gives ". $row['rating']." rating";
   
       }   
   } 
   ?>
    </div>
</div>
</div>
<!-- -------------------------------------------------------->
<br>
<br>

<div class="container">
    <div class="row">
 
<form action="" method="post">
 
    <div>
        <h3>Sandwich</h3>
    </div>
      
    <div class="container" >
    <label for="comment"><b>Reviews By users:</b></label>
    <?php
   $sql1 = "SELECT username,rating,review FROM rating_02 WHERE foodname='Sandwich'" ; 
   $result = mysqli_query($conn, $sql1);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
       echo "<br>";
   echo "<strong>".$row['username']."</strong>" ." writes ". $row['review'] .". Gives ". $row['rating']." rating";
   
       }   
   } 
   ?>
    </div>
</div>
</div>

<!-- -------------------------------------------------------->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
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

