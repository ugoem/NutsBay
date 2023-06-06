<?php
//	session_start(); // start session
$con = mysqli_connect("localhost", "root", "", "nutbay_db2");
if(mysqli_connect_errno()){
//echo "Connection Failed".mysqli_connect_error();
$error = "Connection Failed".mysqli_connect_error();
include 'views/login.html.php';
exit();
}

if (!$con)
{
$error = 'Unable to connect to the database server.';
include 'views/login.html.php';
exit();
}
if (!mysqli_set_charset($con, 'utf8'))
{
$error = 'Unable to set database connection encoding.';
include 'views/login.html.php';
exit();
}
if (!mysqli_select_db($con, 'nutbay_db2'))
{
$error = 'Unable to locate the NutBay database.';
include 'views/login.html.php';
exit();
}
  // define global constants
/*	define ('ROOT_PATH', realpath(dirname(__FILE__))); // path to the root folder
	define ('INCLUDE_PATH', realpath(dirname(__FILE__) . '/includes' )); // Path to includes folder
	define('BASE_URL', 'http://localhost/auenetpub/'); // the home url of the website */
	

  ?>
  