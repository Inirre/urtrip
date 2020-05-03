function formBackToEdit(){
    var modifyOrder = document.getElementById('modifyOrder');
    var paymentForm = document.getElementById('payment-form');
    var formSummary = document.getElementById('formSummary');
    var continueButton = document.getElementById('continueButtonContainer');
    var consentBox = document.getElementById('consentBox');
    modifyOrder.addEventListener('click', () => {
        formSummary.classList.remove("popup-fullScreen");
        formSummary.classList.add("sticky-container");
        continueButton.classList.remove('hidden');
        paymentForm.classList.add('hidden');
        consentBox.disabled = false;
    })
};

formBackToEdit();