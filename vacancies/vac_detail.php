<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="../include/stylesheet.css">
</head>
<body>
</body>
</html>


<?php 
$con = new mysqli('localhost', 'root', 'MyN3wP4ssw0rd', 'hragency');
require('../include/config.php');
require('../header.php');
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
    $query = "select * from vacancy where idvac='$id'";
    
    echo "<h2>$vac_detail</h>";
    
    //retrieve of information
    $result = mysqli_query($con, $query) or die(mysqli_error());
    $row = mysqli_fetch_array($result);
    
    //table output construction
    // here insert new detail fonct for vac.
    echo "
    <table border=1>
  <tbody>
    <tr>
      <td><font>".$vtitle."</font></td>
      <td rowSpan=1 colspan=3>$row[title]</td>
      <td><font>".$vcat."</font></td>
      <td>$row[cat]</td>
    </tr>
    <tr>
      <td><font>".$vskill1."</font></td>
      <td>$row[skill1]</td>
      <td><font>".$vskill2."</font></td>
      <td>$row[skill2]</td>
      <td><font>".$vskill3."</font></td>
      <td>$row[skill3]</td>
    </tr>
    <tr>
      <td><font>".$vplace."</font></td>
      <td>$row[place]</td>
      <td><font>".$vstart."</font></td>
      <td>$row[start]</td>
      <td><font>".$vtypecontr."</font></td>
      <td>$row[typecontr]</td>
    </tr>
    <tr>
      <td rowSpan=1 colspan=6><font>".$vdescr."</font><br>".$row[descr]."</td>
    </tr>
    <tr>
      <td><font>".$ename."</font></td>
      <td rowSpan=1 colspan=3>";
      //retreive enterprise name in table enterprise
      $que = "select * from enterprise where identr='$row[identr]'";
       $res = mysqli_query($con, $que) or die(mysqli_error());
       $ro = mysqli_fetch_array($res);
      echo $ro[enterprise];
      echo "
      </td>";
       //Retreive contact informations from table contact and insert in next table fields.
       $query = "select * from contact where idcont='$row[idcont]'";
       $resu = mysqli_query($con, $query) or die($con->error);
       $rows = mysqli_fetch_array($resu);
    
      echo "
      <td><font>Name<font></td>
      <td rowSpan=1 colspan=2>".$roww[name]."&nbsp;".$roww[firstname]."</td>
     </tr>
    <tr>
      <td><font>".$cteldir."</font></td>
      <td rowspan=1 colspan=2>".$roww[teldir]."</td>
      <td><font>".$cemail."</font></td>
      <td rowspan=1 colspan=2><a href=mailto:".$roww[email]."?subject=".$row[title].">".$roww[email]."</a></td>
    </tr>
  </tbody>
</table>";
    
    
    
    
    
    
    //until here
    
    echo "<a href=/hragency/vacancies/vac_list.php>$vlist</a>"; 




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
 

 <?php require('../footer.php') ?>
