<?php

namespace PHPMailer\PHPMailer;

include('src/Exception.php');
include('src/PHPMailer.php');
include('src/SMTP.php');

$mail = new PHPMailer();

try{



$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";

//User Email Id and password start

$mail->Username   = "";
$mail->Password   = "";

//User Email Id and password end

$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$fullName = $_POST["fullName"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$message = $_POST["message"];

$mail->IsHTML(true);
$mail->AddAddress("anilvishwa4india@gmail.com", "anil");
$mail->SetFrom("anilvishwa4india@gmail.com", "Anil Vishwakarma");
$mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";


$mail->MsgHTML($content);
$mail->Send();

//if(!$mail->Send()) {
//  echo "Error while sending Email.";
//} 
} catch (phpmailerException $e) {
  echo $e->errorMessage();
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

//else {
//   echo "Email sent successfully";
// }


?>
