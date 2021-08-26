<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


if(isset($_POST['email'])){
	
	$subject = "Contact Submission";		//Change the subject of the contact form submission

	$to = '99fusion@gmail.com';    //Change this to your mail address

	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$message = $content." FROM: ".$name." ( ".$email." | ".$phone.")" ." ".$message;
	if ( mail( $to, $subject, $message ) ) {
	     echo '<i class="icon-checkmark"></i> Message Sent';
	}
} else{
	echo ' Unable to send message';
}
?>