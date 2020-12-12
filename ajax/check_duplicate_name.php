<?php
    include('../config/dbconnection.php');
    $USER_NAME = $_POST['USER_NAME'];
    $sql = "SELECT (1) FROM users WHERE USER_NAME = '$USER_NAME'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) == 0){
        echo 0;
    }else{
        echo 1;
    }
?>