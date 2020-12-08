<?php
    $to = 'manquiz92@gmail.com';
    $subject = 'This is an email';
    $body = 'This is a test email '."\n\n".' and hpe you got it';
    $headers = 'From: MAQUIZ <winstone@maquiz.com>';

    $sendMail = mail($to,$subject,$body,$headers);
    if($sendMail){
        echo 'Email sent to '.$to;
    }else{
        echo 'error in sending email';
    }

?>