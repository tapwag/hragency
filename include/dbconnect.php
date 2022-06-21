<?php
    $user = "hragency";
    $pass = "hragency";
    $host = "localhost";
    $dbdb = "hragency";
    
$conn = new mysqli($host, $user, $pass, $dbdb);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
   }
?>
