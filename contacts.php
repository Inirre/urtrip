<?php
$title = 'Contacts';

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

require 'header.php';
?>


<div class="banner banner__contacts first-div">
    
    <div class="main-container">
        <div class="card">

            <h1 class="card__title">Lorem ipsum dolor sit amet</h1>
            <h3 class="card__content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel quod obcaecati adipisci quae explicabo quis minus sunt molestias inventore voluptatum.</h3>

        </div>
    </div>

</div>

<div class="contacts">

    <div class="main-container">
        
        <div class="contacts__info">
            <h3 class="contacts__info__title">Comment nous contacter ?</h1>
            <p class="contacts__info__content">Ecrivez-nous directement en remplissant le formulaire ci-dessous. Votre demande sera traîtée sous 48 heures.<br>
            Alternativevment vous pouvez essayer de nous appaler au +33 6 12 34 56</p>
        </div>

        <div class="form">

            <?= $thankYou ?>
            <form method="post" action="contacts.php">
                <div class="form__section">
                    <div class="small-container">



                        <div class="form__item">
                            <label>Nom *<br>
                                <input class="form__field" name="senderName" type="text" placeholder="Jean Dupond" required>
                            </label>
                        </div>
        
                        <div class="form__item">
                            <label>Adresse email *<br>
                                <input class="form__field" id="senderEmail" name="senderEmail" type="email" placeholder="jean.dupond@email.com" required>
                            </label>
                        </div>
            
                        <div class="form__item">
                            <label>Numéro de téléphone<br>
                                <input class="form__field" name="senderPhone" type="tel" placeholder="06 12 34 56 78" required>
                            </label>
                        </div>
        
                        <div class="form__item">
                            <label>Objet *<br>
                                <input class="form__field" name="senderSubject" type="text" placeholder="Ma question" required>
                            </label>
                        </div>
        
                        <div class="form__item">
                            <label>Message *<br>
                                <textarea class="form__field form__textarea" name="senderMessage" placeholder="Votre message" required></textarea>
                            </label>
                        </div>
        
                        <div class="form__item">
                            <p class="form__note">* Les champs marqués d'un astérisque sont obligatoires</p>
                        </div>
            
                        <div class="form__item">
                            <input class="form__submit btn btn--blue" type="submit" name="submit" value="Envoyer">
                        </div>
                    </div>
                    
    
                </div>
            </form>

        </div>


    </div>

</div>



<?php
require 'footer.php'
?>