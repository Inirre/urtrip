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
                    <input class="form__submit btn btn--blue btn--large" type="submit" name="submit" value="Envoyer">
                </div>
            </div>
            
        </div>
    </form>

</div>