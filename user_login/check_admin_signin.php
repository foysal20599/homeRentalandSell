<?php session_start();
 include('../config/dbconnection.php');
$_SESSION['flag']=0;
$sql="select  * from admin_users where 
(ADMIN_USER_NAME = '$_POST[username]' OR ADMIN_USER_EMAIL = '$_POST[username]')
and ADMIN_USER_PASS = '$_POST[userpassword]'";
$result= mysqli_query($con, $sql);
$row= mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) == 1 ){
$_SESSION['flag']=1;
$_SESSION['admin']=$row['ADMIN_USER_NO'];
	echo 1;
}
else{
	echo 0;
}
?>
