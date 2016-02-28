<?php

//send data to more email ============================================

if(isset($_POST['submit'])){
	$to = "cromozooom@gmail.com,calinalefter@gmail.com"; // this is your Email address
	$from = $_POST['email']; // this is the sender's Email address
	$name = $_POST['name'];
	$firstName = $_POST['firstName'];
	$function = $_POST['function'];
	$domain = $_POST['domain'];
	$tel = $_POST['tel'];
	$subject = "Message from calinalefter.com";
	$Message = $name . " " . $firstName . "\n\n".$tel . " " . "Email: " . $from ."\n\n" . "Message:\n" . $_POST['Message'];
	$headers = "From:" . $from;
	$result = mail($to,$subject,$Message,$headers);
	if(!$result) {
		 die("ERROR - The data were not sent: " .mysql_error());
	} else {
		die(include('messageSend.php'));
		header("location:thank_you.php"); // header('Location: thank_you.php'); to redirect to another page.
	}
}

//====================================================================

?>