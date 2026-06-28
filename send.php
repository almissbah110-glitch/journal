<?php

		$fullname = $_POST['fullname'];
		$email = $_POST['email']; 
		$number = $_POST['number'];
		$subject = $_POST['subject']; 
		$message = $_POST['message'];
		$send = "joizwyjvaxaj@almissbah.org";
		$msg .="Name : ".$fullname."\n";
		$msg .="E-mail : ".$email."\n";
		$msg .="Phone : ".$number."\n";
		$msg .="subject : ".$subject."\n";
		$msg .="message : \n".$message."\n";
		$header = 'Extra-theme' . "\r\n";
		mail($send,$subject,$msg,$header);
				
	echo "<center> <br><h1>تم ارسال الرسالة بنجاح</h1></center>";
	header("refresh:1; url=contact.html");

