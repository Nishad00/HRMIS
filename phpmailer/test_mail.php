<?php
require 'class.smtp.php';
require 'PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->setFrom('admin@example.com');
$mail->addAddress('pdpatil@mitaoe.ac.in');
$mail->Subject = 'HRMIS';
$mail->Body = '<h2>Hello! Kajal </h2><p style="color:Blue;">
I am using PHPMailer to send email</p>';
$mail->isHTML(true);
$mail->AltBody = "This message is generated by plain text !";
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'kedar@mitaoe.ac.in';
$mail->Password = 'kedar1023';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
}
?>