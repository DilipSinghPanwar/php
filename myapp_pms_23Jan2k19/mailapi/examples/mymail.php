<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

$name=$_GET['name'];
$email=$_GET['email'];
$password=$_GET['password'];

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
$mail->addAddress("$email", "$name");

//Set the subject line
$mail->Subject = 'Verification mail for PMS';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->Body = "<h1>Welcome To PMS</h1><p>You have been successfully registered  on PMS ,your login credentials are attached bellow</p><h3>Username : $email</h3><h3>Password : $password</h3>";

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
      	echo "<script>alert('Register successfully')</script>";
      	echo "<script>window.location='http://localhost/phpbatch89/myapp/register.php'</script>";	
}
