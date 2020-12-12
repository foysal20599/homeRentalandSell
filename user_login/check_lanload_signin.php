<?php session_start();
 include('../config/dbconnection.php');
$_SESSION['flag']=0;
$sql="select  * from users where 
(USER_NAME = '$_POST[username]' OR USER_EMAIL = '$_POST[username]' OR USER_PHONE = '$_POST[username]')
and USER_PASS = '$_POST[userpassword]'";
$result= mysqli_query($con,$sql);
$data = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) == 1 ){
$_SESSION['flag']=1;
$_SESSION['login']=$data['USER_NO'];
	echo 1;
}
else{
	echo 0;
}
?>
