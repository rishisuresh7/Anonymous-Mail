<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	$senemail = $_POST['sender'];
	$recemail = $_POST['reciever'];
	$senname = $_POST['fromname'];
	$ob = new PHPMailer();
	$ob->setFrom($senemail,$senname);
	$ob->Subject = $_POST['subject'];
	$ob->Body = $_POST['message'];
	$ob->AddAddress($recemail);
    error_reporting(E_ALL ^ E_WARNING); 
	if($ob->Send())
		echo '<script type="text/javascript">
		window.alert("Mail Sent Successfully");
		location.replace("index.html");
	</script>';
	else
		echo '<script type="text/javascript">
		window.alert("Some Error Occured Try Again.");
		location.replace("index.html");
	</script>';
?>