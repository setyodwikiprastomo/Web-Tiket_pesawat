<?php
  $server        = "localhost";
  $user          = "root";
  $password      = "";
  $nama_database = "db_travel";
 
 // Create connection
 $conn = new mysqli($server, $user, $password);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 
?>