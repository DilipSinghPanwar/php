<?php

$server="localhost";
$user="root";
$password="root";
$db_name="phpbatch83000";

//to connect with mysql database
$con=mysqli_connect($server,$user,$password) or die('<h1>Problem in database connection</h1>');

//to select particular database
mysqli_select_db($con,$db_name) or die('<h1>Problem in database selection</h1>');
	
echo "<h1>Database connection done....</h1>";	
	
?>
