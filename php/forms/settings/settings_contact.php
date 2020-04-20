<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if($_POST["submit"]) {

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '7c15e3ff042ca8';                     // SMTP username
        $mail->Password   = 'ebc467df50e368';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($_POST["senderEmail"], $_POST["sender"]);

        $mail->addAddress('valentin.dupont1709@gmail.com', 'Valentin');
        // Attachments

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $_POST["senderSubject"];

        if ($_POST["senderPhone"]){
            $phone = $_POST["senderPhone"];
        } else {
            $phone = 'no phone number provided';
        }
        $body = $_POST["senderMessage"] . $phone;

        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();

        $thankYou="<div id='test' class='form__confirmation'>
                    <p class='form__confirmation__message'>Merci de nous avoir contacté !\nLes messages sont généralement traîtés sous 48h.</p>
                    <i class='far fa-times-circle form__confirmation__cross'></i>
                    </div>";

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}

?>