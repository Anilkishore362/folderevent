<?php
    $name = $_POST['Name'];
	$vis_email = $_POST['Email'];
	$message = $_POST['Message'];

$email_form ='nivikrish.tk';

$email_subject = "new form submission";

$email_body ="User Name:$name.\n".
              "User Email:$vis_email.\n".
			  "User Message:$message.\n";
			  
			  
$to = "dga.24.anil@gmail.com";

$headers = "From: $email_form \r\n";

$headers = "reply-to:$vis_email \r\n"; 

mail($to,$email_subject,$email_body,$headers);
header("Location: contact1.html");

?>