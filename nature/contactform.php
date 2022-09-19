<?php
 if (isset($_POST['submit']))
 {
 	$name = =$_POST['name'];
	$mailform = =$_POST['mail'];
	$subject = =$_POST['name'];
	
	
	$mailTo = "dga.24.anil@gmail.com";
	$headers = "From: ".$mailform;
	$txt = "you have recived an email from ".$name.".\n\n".$subject;
	
	mail($mailTo, $txt, $headers);
	header("Location: contact2.php?mailsend");
	}
?>