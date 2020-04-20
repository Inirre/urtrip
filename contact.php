<?php
$title = 'Contact';
require 'header.php';
?>

<?php
require 'php/banners/banner_contact.php'
?>

<div class="contacts">

    <div class="main-container">
        
        <div class="contacts__info">
            <h3 class="contacts__info__title title--secondary--blue">Comment nous contacter ?</h1>
            <p class="contacts__info__content">Ecrivez-nous directement en remplissant le formulaire ci-dessous. Votre demande sera traîtée sous 48 heures.<br>
            Alternativevment vous pouvez essayer de nous appeler au +33 6 12 34 56</p>
        </div>

        <?php
        require 'php/forms/settings/settings_contact.php';
        require 'php/forms/form_contact.php';
        ?>
    </div>

</div>

<script src="scripts/formMessages.js" defer></script>


<?php
require 'footer.php'
?>