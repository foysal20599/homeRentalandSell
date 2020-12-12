<?php
include("../config/dbconnection.php");
$id = $_GET['id'];

$sql = "delete from advertisements where AD_NO='$id'";
if(mysqli_query($con,$sql)){
	header("location:../Profile/manageads.php");
}
?>