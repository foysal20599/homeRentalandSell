<?php
$dbname = "hms";
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($con, "utf8");

if (isset($_GET['inactive'])) {
	$id = $_GET['inactive'];
	$sql = "update advertisements set ACTIVE=1 where AD_NO='$id'";
	if(mysqli_query($con,$sql)){
		header("location:../");
}

}

if (isset($_GET['active'])) {
	$id = $_GET['active'];
	$sql = "update advertisements set ACTIVE=0 where AD_NO='$id'";
	if(mysqli_query($con,$sql)){
		header("location:../");
}

}
?>