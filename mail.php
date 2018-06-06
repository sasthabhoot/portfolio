<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent=" From: $name \n Email: $email \n Message: $message";

$recipient = "postboxno.7@outlook.com";
$subject = "Ping from Portfolio";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
