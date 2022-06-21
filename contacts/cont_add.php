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
      
  <h3><?php echo $einsert_title;?></h3><br>

<form action="/hragency/contacts/cont_add_script.php" method="GET" name="form_cont_add">
<table>
  <tbody>  <?php echo $dd ;?>
    <tr>
      <td><font><?php echo $ename ;?></font></td>
      <?php
      //block for retreive enterprise list
        include($path_include."dbconnect.php");
      	$query = "SELECT identr, enterprise FROM enterprise";
	$result = mysql_query($query) or die(mysql_error());

	echo "<td><select name=enterprise size=3>";
	
	while ($row = mysql_fetch_array($result))
	  {
	  echo "<option value=".$row["identr"].">".$row["enterprise"]."</option>"; 
	  }  
	echo "</select>";
      ?>      
      </td>
    </tr>    
    <tr>
      <td><font><?php echo $cname ;?></font></td>
      <td><input type="text" name="name" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $cfirst;?></font></td>
      <td><input type="text" name="first" size="30" maxlength="50"></td>
    </tr>    
    <tr>
      <td><font><?php echo $eadr1;?></font></td>
      <td><input type="text" name="adr1" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $eadr2;?></font></td>
      <td><input type="text" name="adr2" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $enap;?></font></td>
      <td><input type="text" name="nap" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $ecity;?></font></td>
      <td><input type="text" name="city" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $cteldir;?></font></td>
      <td><input type="text" name="teldir" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $cmobile;?></font></td>
      <td><input type="text" name="mobile" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $cemail;?></font></td>
      <td><input type="text" name="email" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $cbirth;?></font></td>
      <td><input type="text" name="birth" size="30" maxlength="50"></td>
    </tr>
    
  </tbody>
</table>
<br><button type="submit" name="submitcont" value="OK"><b><?php echo $binsert; ?></b></button>
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
 

 <? require($path."footer.php") ?>