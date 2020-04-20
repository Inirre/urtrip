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

        // Customer details
        $firstName = $_POST["customerDetails"]["firstName"];
        $laststName = $_POST["customerDetails"]["lastName"];
        $fullName = $firstName . " " . $lastName;
        $birthYear = $_POST["customerDetails"]["birthYear"];
        $emailAddress = $_POST["customerDetails"]["emailAddress"];
        $phoneNumber = $_POST["customerDetails"]["phoneNumber"];
        $workCategory = $_POST["customerDetails"]["workCategory"];
        $work = $_POST["customerDetails"]["work"];

        // Trip type
        $tripType = $_POST["tripDetails"]["type"];

        // Travellers details
        $numberOfAdults = $_POST["tripDetails"]["travellers"]["numberOfAdults"];
        $numberOfMinors = $_POST["tripDetails"]["travellers"]["numberOfMinors"];
        $numberOfChildren = $_POST["tripDetails"]["travellers"]["numberOfChildren"];

        // Trip times and places
        $dateDeparture = $_POST["tripDetails"]["times"]["departure"];
        $dateReturn = $_POST["tripDetails"]["times"]["return"];
        $tripDuration = $_POST["tripDetails"]["times"]["duration"][0] . " " . $_POST["tripDetails"]["times"]["duration"][1];
        $placeFrom = $_POST["tripDetails"]["places"]["from"];
        $placeTo = $_POST["tripDetails"]["places"]["to"];
        $additionalInfo = $_POST["tripDetails"]["additionalInfo"];

        // transport details
        $transportMode = implode(" ", $_POST["tripDetails"]["transport"]["modes"]);
        $transportPreference = $_POST["tripDetails"]["transport"]["preference"];

        // on site
        $onSiteTransport = implode(" ", $_POST["tripDetails"]["onSite"]["transport"]);
        $onSiteHousing = implode(" ", $_POST["tripDetails"]["onSite"]["housing"]);

        // budget
        $budget = $_POST["budget"]["min"] . "€ - " . $_POST["budget"]["max"] . " €";



        $mail->setFrom($emailAddress, $fullName);

        $mail->addAddress('valentin.dupont1709@gmail.com', 'Valentin');
        // Attachments

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Mon Voyage";

        $body = "
            CUSTOMER DETAILS\n
            Name = $fullName\n
            Birth Year = $birthYear\n
            email address = $emailAddress\n
            Phone Number = $phoneNumber\n
            Work Category = $workCategory\n
            Work = $work\n
            \n
            TRIP DETAILS\n
            Trip Type = $tripType\n
            Number of adults = $numberOfAdults\n
            Number of minors (5y-18y) = $numberOfMinors\n
            Number of children (<5y) = $numberOfChildren\n
            Date of departure = $dateDeparture\n
            Date of Return = $dateReturn\n
            Trip duration = $tripDuration\n
            Place from = $placeFrom\n
            Place to visit = $placeTo\n
            Additional info = $additionalInfo\n
            \n
            TRANSPORT DETAILS\n
            Transport modes = $transportMode\n
            Transport preferences = $transportPreference\n
            On site transport = $onSiteTransport\n
            On site housing = $onSiteHousing\n
            \n
            BUDGET\n
            Budget = $budget\n
            ";

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
