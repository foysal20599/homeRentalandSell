<?php
	$dbname = "hms";
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


	mysqli_set_charset($con, "utf8");
?>