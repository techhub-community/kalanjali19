<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'yashguptaspark@gmail.com';
$mail->password = 'sssya2910';
$mail->SetFrom('no-reply@howcode.org');
$mail->Subject = 'Hello world';
$mail->Body = 'A test email';
$mail->AddAddress('yashg2910@outlook.com');

$mail->Send();

echo "Mail sent";
?>