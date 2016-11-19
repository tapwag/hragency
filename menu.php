<?php 	
	/*echo $lcand;
	echo "<br>";
	echo $lcompany;
	echo "<br>";
	echo $lagency;
	echo "<br>";
	echo $llogin;
	echo "<br>";*/
	
	
	require($DOCUMENT_ROOT."/hragency/include/config.php");
	include($path_include."dbconnect.php");
	
	$lang = $_SESSION['lang'];
	
	//block for retreiving menu items
	$query = "SELECT id, description FROM menu WHERE lang = '$lang' ";
	$result = mysql_query($query) or die("error");
	
	if ($result)
	{
	  while ($row =mysql_fetch_array($result))
	  {
	    $over = $row["id"];
	    print $row["description"];
	    print "<br>";
	    		//block for retreiving umenu items
	    		$query2 = "SELECT description FROM umenu WHERE id_menu = '$over'";
			$result2 = mysql_query($query2) or die(error2);
			if ($result2)
			{
			   while ($row2 = mysql_fetch_array($result2))
			      {
			      print "&#160;&#160;-&#160;&#160;&#160;";
			      print $row2["description"];
			      print "<br>";
			      }
			}
	    
	    
	    
	    print "<br>";
	  }    
	mysql_free_result($result);
	}    
	//login block
	/*print 
	"<table border='2' title='Login'>
	  <tr>
	     <TD style='bold' bgcolor='#2A0A81'>
	     <font color='white'>Login</font>
	     </TD>
	  </tr>
	  <tr>
	     <td>
	        <form name='login' method='get' action='login.php'>
	        $user <input type='text' name='username' size='20'>
	        <br>
	        $pwd <input type='text' name='pwd' size='20'>
	        <input type='submit' name='submit' value='OK'>
	        </form>
	    </td>
	 </tr>
	</table>";*/
?>






	

