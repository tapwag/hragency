<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="/hragency/include/stylesheet.css">
</head>
<body>
</body>
</html>






<?php 
require($DOCUMENT_ROOT."/hragency/include/config.php");
require($path."header.php");
require($path_lang."langselect.php");
require($path_include."dbconnect.php");
?>

<table bgcolor="white" width="100%" height="550" border="1" >
  <tbody>
    <tr>
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<h3>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">
<!--start of fonction section-->
<?php 

if ($submitcont == "OK")

{ 
$query = "insert into contact (idcont,identr,name,firstname,adr1,adr2,nap,city,teldir,mobile,email,birthdate) values ('', '$enterprise', '$name', '$first', '$adr1', '$adr2', '$nap', '$city', '$teldir', '$mobile', '$email', '$birth')";

mysql_query($query);
echo "<font>$c_cont_ins</font>";


}

echo "<br>";
echo "<a href=/hragency/enterprises/entr_list.php><font>$clink_list</font></a>";


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