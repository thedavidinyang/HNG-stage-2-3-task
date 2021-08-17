<?php

# HNGi8 STAGE 2 => 3 PROJECT
# Author: David Inyang
# Email: davidinyang01@gmail.com
# phone: +2348182412241
# Language: English

if(empty($_POST['name'])){
	
	die('Please enter your name.');
} else {
	
	$name = check_input($_POST['name']);
}

if(empty($_POST['phone'])){
	die('Please enter your phone number.');
} else {
	
	if(!is_numeric($_POST['phone'])){
		die('Please enter a correct phone numbe.r');
	} else {
		
		$phone = $_POST['phone'];
	}
}

if(empty($_POST['email'])){
	die('Please enter your email.');
} else {
	
	$veri_mail = verifymail($_POST['email']);
	
	if(empty($veri_mail)){
		die('Please enter a valid email address.');
	} else {
		$mail = $_POST['email'];
	}
}

if(empty($_POST['message'])){
	die('Please enter a message');
} else {
	$message = check_input($_POST['message']);
}

#organise mail for sender
$user_message = "Hi [NAME], <br> Thank you for reaching out, i'll get back to you on your message as soon as possible. <br> Till then, Stay fresh <br>You're message details  are:
	<p>Name: [NAME]</p>
	<p>Email: [EMAIL] </p>
	<p>Phone: [PHONE]</p>
	<p>Message: [MESSAGE]</p>
	<br> ";
$user_message = str_replace("[NAME]", $name, $user_message);
$user_message = str_replace("[EMAIL]", $mail, $user_message);
$user_message = str_replace("[PHONE]", $phone, $user_message);
$user_message = str_replace("[MESSAGE]", $message, $user_message);

#organise mail for David
$david_message = "Hi David, <br> You just recieved a message on your dashboard.<br>Message details  are:
	<p>Name: [NAME]</p>
	<p>Email: [EMAIL] </p>
	<p>Phone: [PHONE]</p>
	<p>Message: [MESSAGE]</p>
	<br> ";

$david_message = str_replace("[NAME]", $name, $david_message);
$david_message = str_replace("[EMAIL]", $mail, $david_message);
$david_message = str_replace("[PHONE]", $phone, $david_message);
$david_message = str_replace("[MESSAGE]", $message, $david_message);




#send mail to visitor
sendmail($mail, $user_message, $name);

#send mail to david
sendmail($mail_sender, $david_message, $name);

die('1');




?>