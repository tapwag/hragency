<?php
$con = new mysqli('localhost', 'root', 'MyN3wP4ssw0rd', 'hragency');
require('../include/config.php');
// require('../language/langselect.php');
require('../include/dbconnect.php');
require('../language/en.php');

// varible attribution
$user= $_POST[username];
$pwd = $_POST[password];

//determine which role the logged user has

$query = "select * from login where login='$user'";
$result = mysqli_query($con, $query) or die($mysqli -> error);
$row = mysqli_fetch_array($result);


if ($pwd == $row['pwd'])
{
//echo "you are the user".$user."with the roleid:".$row['idrole'];
$redirect = "../enterprises/entr_detail.php";
header("Location:".$redirect."?id=".$row['entrattach']); 

}
else
{
$redirect = "entr_login2.php";
header("Location: $redirect"); 
}
?>
