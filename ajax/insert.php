<?php
include("../config/dbconnection.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['mobile'];
$gen = $_POST['gen'];
$sql = "insert into users set USER_NO='',USER_NAME='$name',USER_EMAIL='$email',USER_PASS='$password',USER_PHONE='$phone',USER_GENDER='$gen' ";
$query = mysqli_query($con, $sql);
echo $query;

?>

