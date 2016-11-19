<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="../include/stylesheet.css">
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
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<font>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top">
  <!--fontction block-->
<?php
    include($path_include."dbconnect.php");
    
    // retrieval from $_GET
    $id = $_GET["id"];
   
    //query construction
    $query = "select * from contact where idcont='$id'";
    
    echo "<h2>$cont_detail</h>";
    
    //retrieve of information
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($result);
    
    //table output construction
    echo "
    <table border=1>
  <tbody>
    <tr>
      <td><font>$cid</font></td>
      <td>$row[idcont]</td>
    </tr>
    <tr>
      <td><font>$cname</font></td>
      <td>$row[name]</td>
    </tr>
    <tr>
      <td><font>$cfirst</font></td>
      <td>$row[firstname]</td>
    </tr>
    
    <tr>
      <td><font>$cadr1</font></td>
      <td>$row[adr1]</td>
    </tr>
    <tr>
      <td><font>$cadr2</font></td>
      <td>$row[adr2]</td>
    </tr>
    <tr>
      <td><font>$cnap</font></td>
      <td>$row[nap]</td>
    </tr>
    <tr>
      <td><font>$ccity</font></td>
      <td>$row[city]</td>
    </tr>
    <tr>
      <td><font>$cteldir</font></td>
      <td>$row[teldir]</td>
    </tr>
    <tr>
      <td><font>$cmobile</font></td>
      <td>$row[mobile]</td>
    </tr>
    <tr>
      <td><font>$cemail</font></td>
      <td>$row[email]</td>
    </tr>
    <tr>
      <td><font>$cbirth</font></td>
      <td>$row[birthdate]</td>
    </tr>
  </tbody>
</table>";
    echo "<a href=/hragency/contacts/cont_edit.php?id=".$row["idcont"].".>$c_edit_cont</a>"; 
 

  
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
 

 <? require($path."footer.php") ?>