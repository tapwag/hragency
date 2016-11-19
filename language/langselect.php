<?php

require($DOCUMENT_ROOT."/hragency/include/config.php");

//require($path_lang."langselect.php");

/*
$_SESSION['lang'] = 'en';
include($path_lang.$_SESSION['lang'].".php");
*/
//session_start();

/*
if ($langOK == "OK")

{
   
   unset($_SESSION['lang']);   
   $_SESSION['lang'] = $lang;
   
   include($path_lang.$_SESSION['lang'].".php");
   //echo $lang;
}
else
{ 
include($path_lang.$_SESSION['lang'].".php");


}
*/

include($path_lang.$_SESSION['lang'].".php");

?>