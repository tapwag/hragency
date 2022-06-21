<?php
require($DOCUMENT_ROOT."/hragency/include/config.php");
require($path_lang."langselect.php");
require($path_include."dbconnect.php");

// varible attribution
$user= $_POST[username];
$pwd = $_POST[password];

//determin which role the logged user has

$query = "select * from login where login='$user'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);


if ($pwd == $row['pwd'] && $row['idrole'] == 1)
{

$redirect = "/hragency/admin/generaladmin.php";
header("Location:".$redirect."?id=".$row['entrattach']); 

}
else
{
$redirect = "/hragency/index.php";
header("Location: $redirect"); 
}
?>