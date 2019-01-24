<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "phpbatch34@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "123@@123";

//Set who the message is to be sent from
$mail->setFrom('phpbatch34@gmail.com', 'PHPBatch');

//Set an alternative reply-to address
$mail->addReplyTo('phpbatch34@gmail.com', 'PHPBatch');

//Set who the message is to be sent to
$mail->addAddress('adawadkarvilekh@gmail.com', 'Vilekh');
$mail->addAddress('phpbatch34@gmail.com', 'PHPBatch');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->Body = 'This is a plain-text message body';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
