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
require('..//header.php');
// require($path_lang."/langselect.php");
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
      
  <h3><?php echo $vinsert_title;?></h3><br>

<form action="/hragency/vacancies/vac_add_script.php" method="GET" name="form_vac_add">
<table>
  <tbody>  <?php echo $dd ;?>
    <tr>
      <td><font><?php echo $ename ;?></font></td>
      <?php
      //block for retreive enterprise list
        include('../include/dbconnect.php');
      	$query = "SELECT identr, enterprise FROM enterprise";
	$result = mysqli_query($con, $query) or die(mysqli_error());

	echo "<td><select name=enterprise size=3>";
	
	while ($row = mysqli_fetch_array($result))
	  {
	  echo "<option value=".$row["identr"].">".$row["enterprise"]."</option>"; 
	  }  
	echo "</select>";
      ?>      
      </td>
    </tr>    
    <tr>
      <td><font><?php echo $cname ;?></font></td>
      <?php
      //block for retreive contact list
        include('../include/dbconnect.php');
      	$query = "SELECT idcont, name FROM contact";
	$result = mysqli_query($con, $query) or die(mysqli_error());

	echo "<td><select name=contact size=3>";
	
	while ($row = mysqli_fetch_array($result))
	  {
	  echo "<option value=".$row["idcont"].">".$row["name"]."</option>"; 
	  }  
	echo "</select>";
      ?>      
      </td>
    </tr>    <tr>
      <td><font><?php echo $vcat;?></font></td>
      <td><select name="cat" size="3">
      <option selected>IT</option>
      <option>Commerce</option>
      <option>Administration</option>
      <option>Vente</option>
      </select></td>
    </tr>    
    <tr>
      <td><font><?php echo $vtitle;?></font></td>
      <td><input type="text" name="title" size="60" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $vskill1;?></font></td>
      <td><input type="text" name="skill1" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $vskill2;?></font></td>
      <td><input type="text" name="skill2" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $vskill3;?></font></td>
      <td><input type="text" name="skill3" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $vplace;?></font></td>
      <td><input type="text" name="place" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $vstart;?></font></td>
      <td><input type="text" name="start" size="30" maxlength="50"><font>Ex: 2005-01-31</font></td>
    </tr>
    <tr>
      <td><font><?php echo $vtypecontr;?></font></td>
      <td>
       <input type="radio" name="typecontr" value="<?php echo $typecontr1;?>"><?php echo "<font id=vier>".$typecontr1."</font>";?>
       <input type="radio" name="typecontr" value="<?php echo $typecontr2;?>"><?php echo "<font id=vier>".$typecontr2."</font>";?>
      </td>
    </tr>
    <tr>
      <td><font><?php echo $vdescr;?></font></td>
      <td><textarea name="descr" cols="65" rows="10"></textarea></td>
    </tr>
  </tbody>
</table>
<br><button type="submit" name="submitvac" value="OK"><b><?php echo $binsert; ?></b></button>
</form>    
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
 

 <?php include('../footer.php') ?>
