<?php
require('../include/config.php');
// require('../language/langselect.php');
require("../include/dbconnect.php");
require('../language/en.php');


// varible attribution
$user= $_POST[username];
$pwd = $_POST[password];

//determine which role the logged user has

$con = mysqli_connect("localhost","root","MyN3wP4ssw0rd","hragency");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Perform query
if ($result = mysqli_query($con, "SELECT * FROM login where login='$user'")) 
{
  echo "Returned rows are: " . mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($pwd == $row['pwd'] && $row ['idrole'] == 1)  
  {
	  $redirect = "generaladmin.php";
	  header("Location:".$redirect."?id=".$row['entrattach']);
  }


  else
	{
		$redirect = "../index.php";
		header("Location: $redirect");
	}

  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>
