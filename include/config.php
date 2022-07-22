<?php
/* This is the config file for setting various parameters*/

/*set language session-cookie
start_session();
session_register("lang");*/

// MySQL Parameters
$host = 'localhost';
$dbuser = 'root';
$dbpass = 'MyN3wP4ssw0rd';
$database = 'hragency';

// Now let's write a string to contain these parameters
// Do not modify this -> Use the parameters above!

$con = new mysqli("$host","$dbuser","$dbpass","$database");

//base language setting // de = german // fr = french // en = english
//$SESSION['lang'] = "en";

//path to applications
$path 		= "./";
$path_entr 	= "./entreprises/";
$path_include 	= "./include/"; 
$path_img 	= "./images/"; 
$path_lang 	= "./language/"; 
?>
