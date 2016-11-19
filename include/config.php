<?php
/* This is the config file for setting divers parameters*/



/*set language session-cookie
start_session();
session_register("lang");*/

//base language setting // de = german // fr = french // en = english
$_SESSION['lang'] = "en";



//path to applications
$path 		= $DOCUMENT_ROOT."/hragency/";
$path_entr 	= $DOCUMENT_ROOT."/hragency/entreprises/";
$path_include 	= $DOCUMENT_ROOT."/hragency/include/"; 
$path_img 	= $DOCUMENT_ROOT."/hragency/images/"; 
$path_lang 	= $DOCUMENT_ROOT."/hragency/language/"; 


?>