<?php 
session_start();
include("../config/dbconnection.php");

$title = $_POST['title'];
$badroom = $_POST['badroom'];
$drawing = $_POST['drawing'];
$bdthroom = $_POST['bdthroom'];
$floor = $_POST['floor'];
$dining = $_POST['dining'];
$kitchen = $_POST['kitchen'];
$balcony = $_POST['balcony'];
$squreFeet = $_POST['squreFeet'];
$liftService = $_POST['liftService'];
$gasConnection = $_POST['gasConnection'];
$garage = $_POST['garage'];
$emargencyEnergy = $_POST['emargencyEnergy'];
$date = $_POST['date'];
$rentNotiable = $_POST['rentNotiable'];
$rentAmount = $_POST['rentAmount'];
$advanceAmount = $_POST['advanceAmount'];
$category = $_POST['category'];
$division = $_POST['division'];
$district = $_POST['district'];
$area = $_POST['area'];
$address = $_POST['address'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$otherFacilitire = $_POST['otherFacilitire'];
$user_id = $_POST['user_id'];

 $sql = "insert into advertisements set AD_NO='', AD_TITLE='$title', BEDS='$badroom', DRAWING='$drawing', BATHS='$bdthroom', FLOOR='$floor', DINING='$dining', KITCHEN='$kitchen', BALCONY='$balcony', SIZE='$squreFeet', ACTIVE=0, USER_ID='$user_id', LIFT_SERVICE='$liftService', GAS_CONNECTION='$gasConnection', GARAGE='$garage', EMERGENCY_ENG='$emargencyEnergy', DATE='$date', RENT_NEGOTIABLE='$rentNotiable', RENT_AMOUNT='$rentAmount', ADVANCE_AMOUNT='$advanceAmount', AD_CATEGORY='$category', DIVITION='$division', DISTRICT='$district', AREA='$area', ADDRESS='$address', EMAIL='$email', PHONE='$phoneNumber', OTHER_NOTE='$otherFacilitire'";
  
if(mysqli_query($con, $sql)){
$_SESSION['last_id'] = mysqli_insert_id($con);
	echo 1;
	
}else{
	echo 0;
}


?>

