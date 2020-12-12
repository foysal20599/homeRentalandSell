<?php include('../config/dbconnection.php'); 
$CHAT_MGS = $_POST['CHAT_MGS'];
$USER_NO = $_POST['USER_NO'];
$sql = "UPDATE `chats` SET `IS_READ` = 1,`READ_TIME` = now() WHERE `FROM_USER_NO` = $USER_NO";
mysqli_query($con,$sql);

$sql = "INSERT INTO `chats` SET `FROM_USER_NO` = -1, `TO_USER_NO` = $USER_NO, `CHAT_MGS` = '$CHAT_MGS'";
mysqli_query($con,$sql);

?>