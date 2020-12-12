<?php
include('../config/dbconnection.php');

$id = $_GET['id'];

$sql = "delete from contract where con_id='$id'";
if(mysqli_query($con,$sql)){
	header("location:contact-fach.php");
}

?>