<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('en', 'phpmailer/language/');
	$mail->IsHTML(true);


	$mail->setFrom('vinfo@complitech.ee', 'New Request');

	$mail->addAddress('complitech@mail.ee');

	$mail->Subject = 'A user request';



	$body = '<h1>A new request from complitech</h1>';
	
	if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
	}
	if(trim(!empty($_POST['country']))){
		$body.='<p><strong>Country:</strong> '.$_POST['country'].'</p>';
	}
	if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Comment:</strong> '.$_POST['message'].'</p>';
	}
	
	

	$mail->Body = $body;


	if (!$mail->send()) {
		$message = 'Error';
	} else {
		$message = 'Success!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>