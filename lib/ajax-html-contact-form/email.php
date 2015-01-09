<?php
$subject = $_REQUEST['subject'] . ' : Borno Contact Form'; // Subject of your email
$to = "eh.rajib@gmail.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['emailaddress'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>