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
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<h3>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">
  <!--fontction block-->
<?php   
echo "
<br><h3 align=center>".$log."</h><br><br>
<table align=center border=1>
  <form action=entr_login1.php method=post>
  <tbody>
    <tr>
      <td bgcolor=#E3EAF7>".$username."</td>
      <td><input type=text name=username size=30 maxlength=50></td>
    </tr>
    <tr>
      <td bgcolor=#E3EAF7>".$pwd."</td>
      <td><input type=password name=password size=30 maxlength=50></td>
    </tr>
    <tr>
      <td rowspan=1 colspan=2 align=right><input type=submit name=login value=OK></form></td>
    </tr>
  
  </tbody>
</table>

</form>";  
?> 
      
 <!-- End function block  -->
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
 

 // <? require("../footer.php") ?>
