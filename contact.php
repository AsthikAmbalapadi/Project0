<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'asthikpb@gmail.com';
$email_subject = 'Contact Us';
$email_body = 'User name: $name.\n'.
              'User email: $email.\n'.
              'User message: $message.\n';

$to = 'asthikpbce@gmail.com';
$headers = 'From: $email_from \r\n';
$headers = 'Reply-to: $visitor_email \r\n';

mail ($to,$email_subject,$message,$headers)
header ('Location: index.html');
?>