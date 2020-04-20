<?php
$title = 'Mon voyage';
require 'header.php';
?>

<div class="urtrip-form first-div">

    <div class="main-container">

        <?php
        require 'php/forms/settings/settings_urtrip-form_mysql_test.php';
        require 'php/forms/form_urtrip-form.php';
        ?>

    </div>

</div>


<script src="scripts/addMinors.js" defer></script>
<script src="scripts/datePicker.js" defer></script>


<?php
require 'footer.php'
?>