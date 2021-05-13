<?php
    //Establishing connection
    $conn = new mysqli('localhost', 'student25.site25', 'red91bus', 'site25');
    //Checking connection
    if ($conn -> connect_errno) {
      echo "Failed to connect: " . mysqli_connect_error();
      exit();
    }
