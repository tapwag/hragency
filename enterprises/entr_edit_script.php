<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="../include/stylesheet.css">
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

if ($editentr == "OK")

//{ 
/*UPDATE `enterprise` SET `enterprise` = 'EMI Consulting Group',
 `adr1` = 'Rte du Pavement 81',
 `nap` = '1018' WHERE `identr` = '10' LIMIT 1 ;*/

 
$query = "update enterprise set enterprise = '$entr', adr1 = '$adr1', adr2 = '$adr2', nap = '$nap', city = '$city', telcentr = '$telcentr', fax = '$fax', site = '$site' where identr = $id";

 
//$query = "insert into enterprise (identr,enterprise,adr1,adr2,nap,city,telcentr,fax,site) values ('', '$entr', '$adr1', '$adr2', '$nap', '$city', '$telcentr', '$fax', '$site')";

mysqli_query($con, $query);
echo "<font>$e_entr_edit</font>";


//}

echo "<br>";
echo "<a href=entr_list.php><font>$elink_list</font></a>";


?>    
<!-- end of fonction section-->
     </td>
    </tr>
    
    <tr>
      <td width="19%" height="97%" bgcolor="#E3EAF7" valign="top"><font id="drei"><?php include($path."menu.php"); ?></font></td>
      
    </tr>
    
    
  </tbody>
</table>


 <? require($path."footer.php") ?>
