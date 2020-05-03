<?php
$inputs = [
    "Prénom", "Nom", "Date_de_naissance[]", "Email", "Téléphone", "Métier",
    "Type_de_voyage", "Adultes", "Mineurs", "Enfants",
    "Départ_le", "Retour_le", "Durée[]",
    "De", "A", "Note", "Mode_de_transport[]", "Retour", "Préférence",
    "Transport_sur_place[]", "Logement[]", "Budget_min", "Budget_max"
];
function formatName($str){
    $temp = preg_replace('/_/i', ' ', $str);
    $name = preg_replace('/[\[\]]/i', '', $temp);
    return $name;
}
?>

<div id="formSummary" class="sticky-container">
    <div class="list-container">
        <h1 class="list-item list-title">Résumé de votre commande</h1>
        <?php foreach($inputs as $input): ?>
            <?= "<div id='".$input."Container' class='grid--2c--35-65 list-item hidden'>" ?>
                <?= "<div>".formatName($input)."</div>" ?>
                <?= "<div id='$input'></div>" ?>
            <?= "</div>" ?>
        <?php endforeach ?>
        <label id="consentContainer" class="list-item">
            <input id="consentBox" class="acceptConditions" name="consent" type="checkbox">
            En cochant cette case, j'ai lu et j'accepte les <a href="#" class="inTextLink">conditions générales de ventes</a> et les <a href="#" class="inTextLink">conditions générales d'utilisations</a>.
        </label>
        <div class="grid--2c--35-65 list-item">
            <p><strong>Tarif</strong></p>
            <p><strong>35€ (* SUPER PROMO LANCEMENT *  jusqu'au 15 Juin 2020 seulement!)</strong></p>
        </div>
        <div id="continueButtonContainer" class="list-item">
            <button id="continueButton" class="btn btn--large btn--blue" type="button" onclick="checkRequiredFields()">Continuer</button>
        </div>


        <?php
        require __DIR__ . '/../stripe/checkout.php';
        ?>
    </div>
</div>