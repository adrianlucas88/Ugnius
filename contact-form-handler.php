<?php
 $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "pasha2366@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: index.html");

?>