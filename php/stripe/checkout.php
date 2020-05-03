<form id="payment-form" class="list-item hidden">
  <div id="card-element"><!--Stripe.js injects the Card Element--></div>
  <button id="submit" class="paymentbutton">
    <div class="spinner hidden" id="spinner"></div>
    <span id="button-text">Payer et soumettre le formulaire</span>
  </button>
  <p id="card-errors" role="alert"></p>
  <p class="result-message hidden">
    Payment succeeded, see the result in your
    <a href="" target="_blank">Stripe dashboard.</a> Refresh the page to pay again.
  </p>
  <p id="modifyOrder" class="inTextLink inTextLink--centered">Modifier ma commande</p>
</form>


