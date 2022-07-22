<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="/hragency/include/stylesheet.css">
</head>
<body>
</body>
</html>






<?php 
require('../include/config.php');
require('../header.php');
require('../language/langselect.php');
require('../include/dbconnect.php');
require('../language/en.php');
?>

<table bgcolor="white" width="100%" height="550" border="1" >
  <tbody>
    <tr>
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<h3>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">
<!--start of fonction section-->
<?php 
$today = date("Y-m-d"); 
if ($submitvac == "OK")

{ 
$query = "insert into vacancy (idvac,title,cat,skill1,skill2,skill3,place,start,identr,idcont,descr,typecontr,datereg) values ('', '$title', '$cat', '$skill1', '$skill2', '$skill3', '$place', '$start', '$enterprise', '$contact', '$descr', '$typecontr', '$today')";

mysqli_query($con, $query);
echo "<font>$v_entr_ins</font>";


}

echo "<br>";
echo "<a href=../enterprises/entr_list.php><font>$elink_list</font></a>";


?>    
<!-- end of fonction section-->
     </td>
    </tr>
    
    <tr>
      <td width="19%" height="97%" bgcolor="#E3EAF7" valign="top"><font id="drei">
	<?php include('/hragency/menu.php'); ?></font></td>
      
    </tr>
    
    
  </tbody>
</table>


 <?php include('../footer.php') ?>
