<?php session_start();
    include('../config/dbconnection.php');
    $USER_NO = $_SESSION['login'];
    $sql = "SELECT `CHAT_MGS`, `SEND_TIME`,FROM_USER_NO FROM `chats` WHERE `FROM_USER_NO` = $USER_NO OR `TO_USER_NO` = $USER_NO";
    $query = mysqli_query($con,$sql);
    $html = "";
    while($row = mysqli_fetch_array($query)):
        if($row['FROM_USER_NO'] == -1):
        $html.="<li class='receive-msg float-left mb-2'><div class='sender-img'><img src='http://nicesnippets.com/demo/image1.jpg' class='float-left'></div><div class='receive-msg-desc float-left ml-2'><p class='bg-white m-0 pt-1 pb-1 pl-2 pr-2 rounded'>".$row['CHAT_MGS']."</p><span class='receive-msg-time'>".$row['SEND_TIME']."</span></div></li>";
        else:
        $html.="<li class='send-msg float-right mb-2'><p class='pt-1 pb-1 pl-2 pr-2 m-0 rounded'>".$row['CHAT_MGS']."</p><span class='receive-msg-time'>".$row['SEND_TIME']."</span></li>";
        endif;
    endwhile;
    echo $html;
?>

