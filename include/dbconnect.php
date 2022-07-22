<?php
    $user = "root";
    $pass = "MyN3wP4ssw0rd";
    $host = "localhost";
    $dbdb = "hragency";
    
$conn = new mysqli($host, $user, $pass, $dbdb);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
   }
?>
