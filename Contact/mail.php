<?php

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$fullName = $firstName . " " . $lastName;
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent="From: $fullName \n\n Subject: $subject \n\n Message: $message";
$recipient = "emailaddress@here.com";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";

?>
