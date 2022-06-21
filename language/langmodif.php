<?php
require($DOCUMENT_ROOT."/hragency/include/config.php");

    session_start();
    unset($_SESSION['lang']);   
   $_SESSION['lang'] = $lang;





?>