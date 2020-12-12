<?php
    include('../config/dbconnection.php');
    $USER_PHONE = $_POST['USER_PHONE'];
    $sql = "SELECT (1) FROM users WHERE USER_PHONE = '$USER_PHONE'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) == 0){
        echo 0;
    }else{
        echo 1;
    }
?>