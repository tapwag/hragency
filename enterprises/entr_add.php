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
require($path."/header.php");
require($path_lang."/langselect.php");
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

<form action="/hragency/enterprises/entr_add_script.php" method="GET" name="form_entre_add">
<table>
  <tbody>  <?php echo $dd ;?>
    <tr>
      <td><font><?php echo $ename ;?></font></td>
      <td><input type="text" name="entr" size="30" maxlength="50"></td>
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
      <td><font><?php echo $etelcentr;?></font></td>
      <td><input type="text" name="telcentr" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $efax;?></font></td>
      <td><input type="text" name="fax" size="30" maxlength="50"></td>
    </tr>
    <tr>
      <td><font><?php echo $esite;?></font></td>
      <td><input type="text" name="site" size="30" maxlength="50"></td>
    </tr>
    
    
  </tbody>
</table>
<br><button type="submit" name="submitentr" value="OK"><b><?php echo $binsert; ?></b></button>
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