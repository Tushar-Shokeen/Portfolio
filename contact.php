<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $toEmail = 'vrishti2012@gmail.com';

    $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject "\r\n Message =" . $message;
    $headers = "From: noreply@yoursite.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($toEmail,$subject,$txt,$headers);
    }

    //redirect
    header("index.html");
?>


