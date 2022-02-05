<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];
$email_from='naveenreddy722@gmail.com';
$email_subject="contact details";
$email_body="Username: $name.\n".
            "Email: $visitor_email.\n".
            "Message: $message.\n";
$to = "naveenreddy722@gmail.com";
$headers="From: $email_from \r\n";
$headers .="reply to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers)
header("Location: index.html");
?>
