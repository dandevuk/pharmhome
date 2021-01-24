<?php
$servername = "localhost";
$username = "daniel";
$password = "password";
$dbname = "pharmhome";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection

if(!$conn){
	echo 'Connection Error' . mysql_connect_error();
}