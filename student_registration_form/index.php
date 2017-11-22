<!DOCTYPE html>
<html>
<head>
	<title>project1</title>
	  <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

<?php


session_start();
//make variables of database attributes
			$host='localhost';
			$dbusername = 'root';
			$dbpassword = '';
			$dbname = 'college_project1';
//connection
	(@$db= mysqli_connect($host,$dbusername,$dbpassword,$dbname))or die("<h3>sorry , we have some problems</h3>");



	//filter inputs came from main page
$username = filter_input(INPUT_POST , 'name');
$password = filter_input(INPUT_POST , 'password');
$emailsign =filter_input(INPUT_POST , 'email');


?>
