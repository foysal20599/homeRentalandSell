<?php
    include('../config/dbconnection.php');
    $USER_EMAIL = $_POST['USER_EMAIL'];
    $sql = "SELECT (1) FROM users WHERE USER_EMAIL = '$USER_EMAIL'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) == 0){
        echo 0;
    }else{
        echo 1;
    }
?>