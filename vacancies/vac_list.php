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
include('../header.php');
//require('../language/langselect.php');
require('../language/en.php');
?>

<table bgcolor="white" width="100%" height="550" border="1" >
  <tbody>
    <!--<tr>;
      <td width="19%" height="3%" bgcolor="#E3EAF7"></h2></td>
      <td width="80%" height="3%"></td>
    </tr>-->
    <tr>
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<h3>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">

<!--start of fonction section-->
  <?php


include('../include/dbconnect.php');

$query = "SELECT idvac, title, cat, skill1, skill2, place FROM vacancy";
$result = mysqli_query($con, $query) or die(mysqli_error());


echo "<h3>".$vlist_title."</h>";
//create output table header
echo "<table border=1>
  <tbody>
    <tr style=font-weight:bold>
      <td><font>$vcat</font></td>
      <td><font>$vtitle</font></td>
      <td><font>$vskill1</font></td>
      <td><font>$vskill2</font></td>
      <td><font>$vplace</font></td>
    </tr>";
  
//calculation output table body
	
	  while ($row = mysqli_fetch_array($result))
	  {
	     
      		  echo "<tr>";
		  echo "<td>".$row["cat"]."</td>";
		  echo "<td>"."<a href="."vac_detail.php?id=".$row["idvac"].">".$row["title"]."</a>"."</td>";
      		  echo "<td>".$row["skill1"]."</td>";
      		  echo "<td>".$row["skill2"]."</td>";
		  echo "<td>".$row["place"]."</td>";
    		  echo "</tr>";
	  }    
echo "</tbody>";
echo "</table>";  

mysqli_free_result($result);

?>    
<!-- end of fonction section-->


     </td>
    </tr>
    
    <tr>
      <td width="19%" height="97%" bgcolor="#E3EAF7" valign="top"><font id="drei">
      <!-- Menu items for every page-->
            
      
      <!--end of menu item-->
      
      </font></td>
      
    </tr>
    
    
  </tbody>
</table>
 

 <? require($path."footer.php"); ?>
