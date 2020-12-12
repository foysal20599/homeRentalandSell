<?php
include("../config/dbconnection.php");
$min = $_POST['min '];
$max = $_POST['max'];
$avg = $_POST['avg'];
$sql = "insert into advertisements set AD_IMAGE_MIN='$min', AD_IMAGE_MAX='max',AD_IMAGE_AVG='$avg'";
if(mysqli_query($con ,$sql)){
   echo 1;
   	window.location.href="adpost.php";
   
}
else{
    echo 0;
}




?>