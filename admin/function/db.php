

<?php

$con = mysqli_connect("localhost","root","","street30");
// `id` (`Id`, `username`, `email`, `password`)
if(!$con)
{
    echo "Connection Failed";
    exit();

}

?>