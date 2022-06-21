<?php
/* This is the config file for setting divers parameters*/



/*set language session-cookie
start_session();
session_register("lang");*/

//base language setting // de = german // fr = french // en = english
$SESSION['lang'] = "en";



//path to applications
$path 		= $_SERVER['DOCUMENT_ROOT']."/hragency/";
$path_entr 	= $_SERVER['DOCUMENT_ROOT']."/hragency/entreprises/";
$path_include 	= $_SERVER['DOCUMENT_ROOT']."/hragency/include/"; 
$path_img 	= $_SERVER['DOCUMENT_ROOT']."/hragency/images/"; 
$path_lang 	= $_SERVER['DOCUMENT_ROOT']."/hragency/language/"; 


?>
