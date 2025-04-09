<?php

// Autoload PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// requiring autoload .php 
require 'vendor/autoload.php';
// declaring message to empty 
$message = '';
// the form method shoud be post 
// and also btn should be clicked 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn'])) {
  // name and email should not be empty 
  $userEmail = $_POST['email'] ?? '';
  $userName = $_POST['name'] ?? '';
  // predefined mail function  
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // Gmail SMTP
    $mail->SMTPAuth   = true;
    $mail->Username   = 'aayush.pathak@innoraft.com';   // our username 
    $mail->Password   = 'fnfs xikg ievl jkwa';       // using app password instead actual one  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;  // port no 

    $mail->setFrom('aayush.pathak@innoraft.com', 'aayush'); // set from function
    $mail->addAddress($userEmail, $userName);  // address 
    $mail->isHTML(true);

    $mail->Subject = 'Thank you for your submission';  // subject of mail .
    $mail->Body    = "Hello <b>$userName</b>,<br>Thank you for submitting the form!"; // body oa the mail.

    // mail send function
    $mail->send();
    $message = 'Email has been sent successfully!'; // message if mail sent sucessfully.
  } catch (Exception $e) {
    $message = "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
