<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
$email_body = "User Email: $visitor_email.\n".
$email_body = "Subject: $subject.\n".
$email_body = "User Message: $message.\n";

$to = 'esraa.mohamed201574@gmail.com';



$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>
