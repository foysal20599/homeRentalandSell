<?php session_start();
    include('../config/dbconnection.php');
    $USER_NO = $_SESSION['login'];
    $text_mgs = $_POST['text_mgs'];
    $sql = "INSERT INTO `chats` SET `FROM_USER_NO` = $USER_NO, `TO_USER_NO` = -1, `CHAT_MGS` = '$text_mgs'";
    mysqli_query($con,$sql);
?>