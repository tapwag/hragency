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
require('../language/en.php');

?>

<table bgcolor="white" width="100%" height="550" border="1" >
  <tbody>
    <!--<tr>;
      <td width="19%" height="3%" bgcolor="#E3EAF7"></h2></td>
      <td width="80%" height="3%"></td>
    </tr>-->
    <tr>
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<font>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">
  <!--fontction block-->
<?php
    include('../include/dbconnect.php');
    
    // retrieval from $_GET
    $id = $_GET["id"];
   
    //query construction
    $query = "select * from enterprise where identr='$id'";
    
    echo "<h2>$entr_detail</h>";
    
    //retrieve of information
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $row = mysqli_fetch_array($result);
    
    //general table for showing enterprise details and offer list
    echo " 
    <table border=0>
      <tbody valign=top cellspacing=10>
        <tr>
          <td>";
	  //table output construction
    echo "
    <table border=1>
  <tbody>
    <tr>
      <td><font>$eid</font></td>
      <td>$row[identr]</td>
    </tr>
    <tr>
      <td><font>$ename</font></td>
      <td>$row[enterprise]</td>
    </tr>
    <tr>
      <td><font>$eadr1</font></td>
      <td>$row[adr1]</td>
    </tr>
    <tr>
      <td><font>$eadr2</font></td>
      <td>$row[adr2]</td>
    </tr>
    <tr>
      <td><font>$enap</font></td>
      <td>$row[nap]</td>
    </tr>
    <tr>
      <td><font>$ecity</font></td>
      <td>$row[city]</td>
    </tr>
    <tr>
      <td><font>$etelcentr</font></td>
      <td>$row[telcentr]</td>
    </tr>
    <tr>
      <td><font>$efax</font></td>
      <td>$row[fax]</td>
    </tr>
    <tr>
      <td><font>$esite</font></td>
      <td>$row[site]</td>
    </tr>
  </tbody>
</table>";
    echo "<a href=../enterprises/entr_edit.php?id=".$row["identr"].">Edit</a>";
    echo "  
	  </td>
          <td>";

//start of vac list section
 

include('../include/inddbconnect.php');

$query = "SELECT idvac, title, cat, skill1, skill2, place FROM vacancy where identr=$id";
$result = mysqli_query($con, $query) or die(mysqli_error());


//echo "<h3>".$vlist_title."</h>";
//create output table header
echo "<table border=1>
  <tbody>
    <tr style=font-weight:bold>
      <td><font>$vcat</font></td>
      <td><font>$vtitle</font></td>
      <td><font>$vskill1</font></td>
      <td><font>$vskill2</font></td>
      <td><font>$vplace</font></td>
      <td><font>E</font></td>
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
		  echo "<td><a href=../vacancies/vac_edit.php?id=".$row["idvac"]."><img src=../images/configure.png alt=Modify</a></td>";
    		  echo "</tr>";
	  }    
echo "</tbody>";
echo "</table>";  
echo "<a href=../vacancies/vac_add.php>".$vadd."</a>";




	  
	  echo "</td>
        </tr>
      </tbody>
    </table>";
    
    

 mysql_free_result($result);

    
 //list all the contacts of this company
 
 $query = "SELECT idcont, name, firstname, nap, city, teldir, mobile, email FROM contact where identr='$id'";
$result = mysqli_query($con, $query) or die(mysqli_error());


echo "<br><h3>".$clist_title."</h>";
//create output table header


echo "<table border=1>
  <tbody>
    <tr style=font-weight:bold>
      
      <td><font>$cname</font></td>
      <td><font>$cfirst</font></td>
      <td><font>$cteldir</font></td>
      <td><font>$cmobile</font></td>
      <td><font>E</font></td>
    </tr>";
  
//calculation output table body
	
	  while ($row = mysqli_fetch_array($result))
	  {
	     
      		  echo "<tr>";
		  
      		  echo "<td>"."<a href="."/hragency/contacts/cont_detail.php?id=".$row["idcont"].">".$row["name"]."</a>"."</td>";
		  echo "<td>".$row["firstname"]."</td>";
		  echo "<td>".$row["teldir"]."</td>";
      		  echo "<td>".$row["mobile"]."</td>";
		  echo "<td><a href=/hragency/contacts/cont_edit.php?id=".$row["idcont"]."><img src=/hragency/images/configure.png alt=Modify</a></td>";
    		  echo "</tr>";
	  }    
echo "</tbody>";
echo "</table>";  
echo "<a href=../contacts/cont_add.php>".$c_add."</a>";




?> 

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
 

 <? require('../footer.php') ?>
