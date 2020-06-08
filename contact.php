<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$email_form = 'asthikpb@gmail.com';
$email_sub = "Contact Us";
$email_body = "Name: $name \n".
              "Mail ID: $mail \n".
              "Message: $message \n";
$headers = "From: $email_form \r\n";
$headers = "Reply to: $mail \r\n";
$to = "asthikpbce@gmail.com";
mail ($to,$email_sub,$message,$headers)
header ("Location: index.html");
?>
