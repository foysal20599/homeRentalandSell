<?php 
session_start();
include("../config/dbconnection.php");

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

 $sql = "insert into contract set con_id='', con_name='$name', email='$email', subject='$subject', massage='$message'";
  
if(mysqli_query($con, $sql)){
	echo 1;
	
}else{
	echo 0;
}


?>