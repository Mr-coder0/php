<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Contact</h1>
    <p><h3>Thank you for your message.</h3></p>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create a new PHPMailer instance
if(isset ($_POST[ "send"]))
{
$mail = new PHPMailer (true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mohdsajidk477@gmail.com';
$mail->Password = 'zazb nlcw umht kken';
$mail ->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('mohdsajidk477@gmail.com');
$mail->addAddress ($_POST["email"]);
$mail->isHTML (true);
$mail->Subject = $_POST["subject"];
$mail->Body = $_POST[ "message"];
$mail->send();


echo
"
Send Mail successfully

";
}
?>
</body>
</html>