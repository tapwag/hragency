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
    
    echo "<h2>$cont_detail_edit</h>";
    
    //retrieve of information
    $result = mysql_query($query) or die(mysql_error());
    $row = mysql_fetch_array($result);
    
    //table output construction
    echo "
    <form action=cont_edit_script.php method=get>
    
    <table border=1>
  <tbody>
    <tr>
      <td><font>$cid</font></td>
      <td><input type=hidden name=idr size=30 maxlength=50 value=".$row[idcont]."></td>
    </tr>
    <tr>
      <td><font>$eid</font></td>
      <td><input type=hidden name=identr size=30 maxlength=50 value=".$row[identr]."></td>
    </tr>
    
    <tr>
      <td><font>$cname</font></td>
      <td><input type=text name=name size=30 maxlength=50 value=".$row[name]."></td>
    </tr>
    <tr>
      <td><font>$cfirst</font></td>
      <td><input type=text name=first size=30 maxlength=50 value=".$row[firstname]."></td>
    </tr>
    <tr>
      <td><font>$cadr1</font></td>
      <td><input type=text name=adr1 size=30 maxlength=50 value=".$row[adr1]."></td>
    </tr>
    <tr>
      <td><font>$cadr2</font></td>
      <td><input type=text name=adr2 size=30 maxlength=50 value=".$row[adr2]."></td>
    </tr>
    <tr>
      <td><font>$cnap</font></td>
      <td><input type=text name=nap size=30 maxlength=50 value=".$row[nap]."></td>
    </tr>
    <tr>
      <td><font>$ccity</font></td>
      <td><input type=text name=city size=30 maxlength=50 value=".$row[city]."></td>
    </tr>
    <tr>
      <td><font>$cteldir</font></td>
      <td><input type=text name=teldir size=30 maxlength=50 value=".$row[teldir]."></td>
    </tr>
    <tr>
      <td><font>$cmobile</font></td>
      <td><input type=text name=mobile size=30 maxlength=50 value=".$row[mobile]."></td>
    </tr>
    <tr>
      <td><font>$cemail</font></td>
      <td><input type=text name=email size=30 maxlength=50 value=".$row[email]."></td>
    </tr>
    <tr>
      <td><font>$cbirth</font></td>
      <td><input type=text name=birth size=30 maxlength=50 value=".$row[birthdate]."></td>
    </tr>
    
  </tbody>
</table>";
    
    echo "<br><button type=submit name=editcont value=OK><b>$bedit</b></button></form>";
    
    
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