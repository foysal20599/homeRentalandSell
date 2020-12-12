<?php
$dbname = "hms";
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($con, "utf8");

$id = $_GET['id'];

$sql = "update from advertisements where AD_NO='$id'";
if(mysqli_query($con,$sql)){
	header("location:../");
}

?>