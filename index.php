<?php
/*hragency-v0.4 - the recruitment agency software
Copyright (C) 2005  by EMI Consulting Group, Oliver Gasser

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/
?>

<html>
<head>
  <title>hragency</title>
  <link rel="StyleSheet" type="text/css" href="/hragency/include/stylesheet.css">
</head>
<body>
</body>
</html>


<?php 
// echo $_SERVER['SERVER_NAME'];

require($_SERVER['DOCUMENT_ROOT']."/hragency/include/config.php");
require($_SERVER['DOCUMENT_ROOT']."/hragency/header.php");
require($_SERVER['DOCUMENT_ROOT']."/hragency/language/langselect.php");
include($_SERVER['DOCUMENT_ROOT']."/hragency/language/en.php");
include($_SERVER['DOCUMENT_ROOT']."/hragency/include/dbconnect.php");

?>

<table bgcolor="white" width="100%" height="550" border="1">
  <tbody >
    <!--<tr>;
      <td width="19%" height="3%" bgcolor="#E3EAF7"></h2></td>
      <td width="80%" height="3%"></td>
    </tr>-->
    <tr>
      <td bgcolor="#E3EAF7" width="19%" height="3%" align="top"><?php echo "<h3>".$lmenu."</h>";?></td>
      <td width="80%" colspan="1" rowspan="2" valign="top" align="center" ><font><?php echo "<br>".$welcome; ?></font><br><br>
      
      	<?php
	//modified vac-list.php to show only the last entries and propose link to full list
	
	$query = "SELECT idvac, title, cat, skill1, skill2, place FROM vacancy WHERE DATE_SUB( CURDATE( ) , INTERVAL 2 
DAY ) <= datereg" ;
	$result = mysqli_query($query) or die(mysql_error());


	echo "<h3>".$vshortlist_title."</h>";
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
	
		  while ($row = mysql_fetch_array($result))
		  {
	     
	      		  echo "<tr>";
			  echo "<td>".$row["cat"]."</td>";
			  echo "<td>"."<a href="."/hragency/vacancies/vac_detail.php?id=".$row["idvac"].">".$row["title"]."</a>"."</td>";
	      		  echo "<td>".$row["skill1"]."</td>";
	      		  echo "<td>".$row["skill2"]."</td>";
			  echo "<td>".$row["place"]."</td>";
			  echo "</tr>";
	  }    
	echo "</tbody>";
	echo "</table>";  
	echo "<a href=/hragency/vacancies/vac_list.php>".$vlist."</a>";

	mysql_free_result($result);

	?>    
      
      </td>
      
          
      
      
      
    </tr>
    
    <tr>
      <td width="19%" height="97%" bgcolor="#E3EAF7" valign="top"><font id="drei">
      <!-- Menu items for every page-->
      <?php
      $query = "select * from vacancy";
      $result = mysql_query($query);
      $count = mysql_num_rows($result);
      echo $openpos1."&nbsp;".$count."&nbsp;".$openpos2;
         
      ?>
      
      
      <!--end of menu item-->
      </font></td>
      
    </tr>
    
    
  </tbody>
</table>
 

 <? require($path."footer.php") ?>
