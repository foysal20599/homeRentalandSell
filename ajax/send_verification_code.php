<?php
    include('../config/dbconnection.php');
    $USER_EMAIL = $_POST['USER_EMAIL'];
    $to = $USER_EMAIL;
    $subject = "Verification Code";
    $VERIICATIN_CODE = rand(1000,9999);
    $message = "
    <html>
    <body>
        Your Verification Code is $VERIICATIN_CODE
    </body>
    </html>
    ";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to,$subject,$message,$headers);
    
?>