<?php
  $host = "localhost";
  $username = "root";
  $password = "";
  $db_name = "newpoules";
  
  
   //Create connection
  $conn = mysqli_connect($host, $username, $password, $db_name);
   //Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  ?>