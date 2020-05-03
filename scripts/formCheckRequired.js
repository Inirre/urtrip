//checks if required fields are filled and conditions accepted
//alerts customer which field to fill

function checkRequiredFields() {

    var inputs = document.querySelectorAll(".requiredInput");
    var conditions = document.querySelector(".acceptConditions");
    var paymentForm = document.getElementById('payment-form');
    var formSummary = document.getElementById('formSummary');
    var continueButton = document.getElementById('continueButtonContainer');
    var consentBox = document.getElementById('consentBox');
    for (var i=0; i<inputs.length; i++){
        if (inputs[i].value == ""){
            alert("Veillez à ce que ces champs soient renseignés: nom, prénom, date de naissance, email, budget min et budget max");
            break
        }
        if((i == inputs.length-1) && (inputs[i].value != "")){
            if (!conditions.checked){
                alert("Veillez accepter les CGV et CGU");
            } else {
                formSummary.classList.remove("sticky-container");
                formSummary.classList.add("popup-fullScreen");
                paymentForm.classList.remove('hidden');
                continueButton.classList.add('hidden');
                consentBox.disabled = true;
            }
        }
    }

}

