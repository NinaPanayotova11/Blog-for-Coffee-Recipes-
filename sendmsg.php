<?php 
$mysqli = new mysqli('localhost', 'root', '', 'perfectcup');

if($mysqli->connect_error){
  die('Error:('.$mysqli->connect_errno.')'.$mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "fakeemail@example.com";
$subject = "Test Message";

if (strlen($fname) > 50) {
  echo 'Name is too long';

} elseif (strlen($fname) < 2) {
  echo 'Name is too short';

} elseif (strlen($email) > 50) {
  echo 'Email is too long';

} elseif (strlen($email) < 2) {
  echo 'Email is too short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo 'Email is not valid';

} elseif (strlen($message) > 50) {
  echo 'Message is too long';

} elseif (strlen($message) < 3) {
  echo 'Message is too short';

} else {

 //MAILER

  require 'phpmailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'fakeemail@example.com';                 // SMTP username
  $mail->Password = 'fakePassword';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->AddReplyTo($email);
  $mail->From = $email2;
  $mail->FromName = $fname;
  $mail->addAddress('fakeemail@example.com', 'Admin');     // Add a recipient

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $subject;
  $mail->Body = $message;
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if (!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      echo 'true';
  }


}