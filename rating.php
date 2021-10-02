<?php
session_start();
require_once "config.php";

if(!isset($_SESSION['username'])) {
    header("Location: index.php"); //Redirect the user

}


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $foodname = $_POST["name"];
    $username = $_SESSION['username']; 
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    if(isset($_POST["submit"])){
       $sql = "INSERT INTO `rating_02` (`serial`, `username`, `foodname`, `rating`, `review`) VALUES (NULL, '$username', '$foodname', '$rating', '$review')" ; 
        
        if (mysqli_query($conn, $sql))
        {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> New Rate Added successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>';
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);

    }

    
}
?>



<html>
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Rating!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
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
                      <a class="nav-link" href="chat.php">Chat with admin</a>
                  </li>
      <li class="nav-item">
        <a class="nav-link" href="user_review.php">View Reviews and Ratings by users</a>
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
    
    <div>
        <input type="hidden" name="name" value="Pizza">
    </div>
       
         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>



    <div class="form-group" style="padding:12px;>
    <label for="comment">Please write a review:</label>
   <textarea class="form-control" name="review"></textarea>
    </div>



    <div><input type="submit" name="submit"> </div>

    
 
</form>
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


      
    <div>
        <input type="hidden" name="name" value="Burger">
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
    <div class="form-group">
  <label for="comment">Please write a review:</label>
  <textarea class="form-control" name="review"></textarea>
    </div>
    <div><input type="submit" name="submit"> </div>
      
    
 
</form>
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

    <div>
        <input type="hidden" name="name" value="Fries">
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
    <div class="form-group">
  <label for="comment">Please write a review:</label>

  <textarea class="form-control" name="review"></textarea>
    </div>
    <div><input type="submit" name="submit"> </div>

    
 
</form>
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
    <div>
        <input type="hidden" name="name" value="Sandwich">
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
    <div class="form-group">
  <label for="comment">Please write a review:</label>
  <textarea class="form-control" name="review"></textarea>
    </div>
    <div><input type="submit" name="submit"> </div>

  
 
</form>
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

