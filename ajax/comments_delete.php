<?php
$dbname = "hms";
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$con = mysqli_connect($hostname, $username, $password, $dbname );
	mysqli_set_charset($con, "utf8");

$id = $_GET['id'];

$sql = "delete from tbl_comment where comment_id='$id'";
if(mysqli_query($con,$sql)){
	header("location:../viewdetail/viewdetail-family.php");
}

?>