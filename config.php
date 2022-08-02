<?php
  $server = "localhost";
  $user ="root";
  $pass = "";
  $db = "eca"; 
  
  $conn = mysqli_connect($server, $user, $pass, $db);
  if(!$conn){
    echo "Invalid ".mysqli_error($con);
  }
 ?>