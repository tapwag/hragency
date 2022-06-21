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
    $query = "select * from enterprise where identr='$id'";
    
    echo "<h2>$entr_detail_edit</h>";
    
    //retrieve of information
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($result);
    
    //table output construction
    echo "
    <form action=entr_edit_script.php method=get>
    
    <table border=1>
  <tbody>
    <tr>
      <td><font>$eid</font></td>
      <td><input type=hidden name=id size=30 maxlength=50 value=".$row[identr]."></td>
    </tr>
    <tr>
      <td><font>$ename</font></td>
      <td><input type=text name=entr size=30 maxlength=50 value=".$row[enterprise]."></td>
    </tr>
    <tr>
      <td><font>$eadr1</font></td>
      <td><input type=text name=adr1 size=30 maxlength=50 value=".$row[adr1]."></td>
    </tr>
    <tr>
      <td><font>$eadr2</font></td>
      <td><input type=text name=adr2 size=30 maxlength=50 value=".$row[adr2]."></td>
    </tr>
    <tr>
      <td><font>$enap</font></td>
      <td><input type=text name=nap size=30 maxlength=50 value=".$row[nap]."></td>
    </tr>
    <tr>
      <td><font>$ecity</font></td>
      <td><input type=text name=city size=30 maxlength=50 value=".$row[city]."></td>
    </tr>
    <tr>
      <td><font>$etelcentr</font></td>
      <td><input type=text name=telcentr size=30 maxlength=50 value=".$row[telcentr]."></td>
    </tr>
    <tr>
      <td><font>$efax</font></td>
      <td><input type=text name=fax size=30 maxlength=50 value=".$row[fax]."></td>
    </tr>
    <tr>
      <td><font>$esite</font></td>
      <td><input type=text name=site size=30 maxlength=50 value=".$row[site]."></td>
    </tr>
  </tbody>
</table>";
    
    echo "<br><button type=submit name=editentr value=OK><b>$bedit</b></button></form>";
    
    
    //echo "<a href=/hragency/enterprises/entr_edit_script.php?id=".$row["identr"].">Edit now</a>"; 

 mysql_free_result($result);

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