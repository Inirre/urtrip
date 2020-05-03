<?php
$title = 'Mon voyage';
require 'header.php';
?>

<script src="https://js.stripe.com/v3/"></script>

<div class="urtrip-form first-div">

    <div id="formContainer" class="grid--2c--60-40">

        <?php
        require 'php/forms/form_urtrip-form.php';
        require 'php/forms/summary_urtrip-form.php';
        ?>

    </div>

</div>




<script src="scripts/addMinors.js" defer></script>
<script src="scripts/datePicker.js" defer></script>
<script src="scripts/tabs.js" defer></script>
<script src="scripts/formSummary.js" defer></script>
<script src="scripts/formCheckRequired.js" defer></script>
<script src="scripts/formBackToEdit.js" defer></script>
<script src="scripts/client.js" defer></script>

<?php
require 'footer.php'
?>