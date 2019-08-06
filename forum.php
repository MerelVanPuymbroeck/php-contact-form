<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;

$errorArray = [];

//name validation
if ($name == "") {
array_push($errorArray, "Fill in your name");
}

//email validation
if ($email == "") {
array_push($errorArray, "Fill in your email");
var_dump($email);
die;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
array_push($errorArray, "email is not valid");
}

//message validation
if ($message == "") {
array_push($errorArray, "message is empty");
}

unset($_SESSION['errors']);

if (!empty($errorArray)) {
$_SESSION['errors'] = $errorArray;
header('Location: index.php');
}

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing true enables exceptions
$mail = new PHPMailer(true);

$newMessage = "You have just receive an email from " . $name . "<br>";
$newMessage .= "The message is:<br>";
$newMessage .= $message;

try {
//Server settings
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.mailtrap.io'; // Specify main and backup SMTP servers
$mail->SMTPAuth = 'true'; // Enable SMTP authentication
$mail->Username = 'ecbe5378f3390c'; // SMTP username
$mail->Password = '295a2da576ca37'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, ssl also accepted
$mail->Port = 2525; // TCP port to connect to

//Recipients
$mail->setFrom($email);
$mail->addAddress('merzlyakova.lena@gmail.com');     // Add a recipient

// Content
$mail->isHTML(true);                                // Set email format to HTML
$mail->Subject = 'Contact email';
$mail->Body    = $newMessage;

$mail->send();
session_destroy();
echo 'Message has been sent';
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
