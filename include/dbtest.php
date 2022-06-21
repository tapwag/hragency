<?php

/* Host name of the MySQL server */
$host = 'localhost';

/* MySQL account username */
$user = 'hragency';

/* MySQL account password */
$passwd = 'hragency';

/* The schema you want to use */
$schema = 'hragency';

/* Connection with MySQLi, procedural-style */
$mysqli = mysqli_connect($host, $user, $passwd, $schema);

/* Check if the connection succeeded */
if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

echo 'Successfully connected!<br>';
