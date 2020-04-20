<div class="form">
        
    <form action="urtrip-form.php" method="post">

        <div class="form__item">
            <p class="form__note">* Les champs marqués d'un astérisque sont obligatoires</p>
        </div>
    
        <div class="form__section bl-blue">

            <div class="small-container">

                <div class="form__section__title">
                    <h2 class="title--main--blue">A propos de vous</h2>
                    <p class="form__section__title__description">Pour nous permettre de mieux vous connaître et vous accompagner tout le long du processus.</p>
                </div>

                <!-- First Name Last Name -->
                <fieldset class="form__fieldset">
                    <legend>Vos coordonnées</legend>
                    
                    <div class="form__item">
                        <label>Prénom *<br>
                            <input class="form__field" name="customer[firstName]" type="text" placeholder="Jean" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Nom *<br>
                            <input class="form__field" name="customer[lastName]" type="text" placeholder="Dupond" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Date de naissance *<br>
                            <select class="form__field form__field--extra-small" name="customer[birthDay]" required>
                                <option selected="selected" disabled hidden>Jour</option>
                                <?php for($i = 1; $i <= 31; $i++): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                            <select class="form__field form__field--extra-small" name="customer[birthMonth]" required>
                                <option selected="selected" disabled hidden>Mois</option>
                                <?php for($i = 1; $i <= 12; $i++): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                            <select class="form__field form__field--extra-small" name="customer[birthYear]" required>
                                <option selected="selected" disabled hidden>Année</option>
                                <?php for($i = (int)date("Y"); $i >= 1900; $i--): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                        </label>
                    </div>
                    <!-- Mail Phone -->
                    <div class="form__item">
                        <label>Adresse email *<br>
                            <input class="form__field" id="emailAddress" name="customer[emailAddress]" type="email" placeholder="jean.dupond@email.com" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Numéro de téléphone<br>
                            <input class="form__field form__field--small" name="customer[phoneNumber]" type="tel" placeholder="06 12 34 56 78">
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Métier<br>
                            <input class="form__field" name="customer[work]" type="text" placeholder="Enseignant">
                        </label>
                    </div>
                </fieldset>



            </div> <!-- small container end -->
            

        
        </div> <!-- form section end -->

        <div class="form__section bl-green">

            <div class="small-container">
                
                <div class="form__section__title">
                    <h2 class="title--main--green">Votre Voyage débute ici</h2>
                    <p class="form__section__title__description">Avez-vous une idée précise ? Souhaitez-vous simplement vous echapper à moindre coût ? Remplissez le plus de champs possibles pour en fonction de vos envies !</p>
                </div>


                <!-- Global info on trip and travellers -->
                <div class="form__item">
                    <label>De quel type de voyage s'agit-il ?<br>
                        <select class="form__field" name="trip[type]">
                            <option value="Personal">Loisir</option>
                            <option value="Professional">Professionel</option>
                            <option value="Event">Evènement (EVG, EVJF, Noce, autre...)</option>
                        </select>
                    </label>
                </div>

                <fieldset class="form__fieldset">
                    <legend>Qui voyage ?</legend>

                    <div class="form__item">
                        <label>Combien de voyageurs majeurs ?<br>
                            <input class="form__field form__field--extra-small" name="trip[travellers][numberOfAdults]" type="number" min="0" placeholder="0">
                        </label>
                    </div>
                    <div class="form__item hidden minors">
                        <label>Combien de jeunes voyageurs ? (5-18 ans) ?<br>
                            <input class="form__field form__field--extra-small" name="trip[travellers][numberOfMinors]" type="number" min="0" placeholder="0">
                        </label>
                    </div>
                    <div class="form__item hidden minors">
                        <label>Combien d'enfants (moins de 5 ans) ?<br>
                            <input class="form__field form__field--extra-small" name="trip[travellers][numberOfChildren]" type="number" min="0" placeholder="0">
                        </label>
                    </div>
                    <div class="form__item">
                        <p class="clickable" id="addMinors">+ Ajouter des voyageurs mineurs</p>
                    </div>
                </fieldset>

                
                
                <!-- infos on destinations -->
                <fieldset class="form__fieldset">
                    <legend>Dates et Lieux</legend>
                    <!-- Info on dates -->
                    <div class="form__item">
                        <div class="form__row">
                            <div id="dateDepartureContainer">
                                <label>Ma date de départ<br>
                                    <input class="form__field" type="text" id="dateDeparture" name="trip[times][departure]">
                                </label>
                            </div>
                            <div id="dateReturnContainer">
                                <label>Ma date de retour<br>
                                    <input class="form__field" type="text" id="dateReturn" name="trip[times][return]">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form__item">
                        <label>Je souhaite partir...<br>
                            <input class="form__field form__field--extra-small" name="trip[times][duration][0]" type="number" min="0" placeholder="14">
                            <select class="form__field form__field--extra-small" name="trip[times][duration][1]">
                                <option value="day">Jour(s)</option>
                                <option value="week">Semaine(s)</option>
                                <option value="month">Mois</option>
                            </select>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Mon lieu de départ<br>
                            <input class="form__field" name="trip[places][from]" type="text" placeholder="Angers">
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Je souhaite voyager à<br>
                            <input class="form__field" name="trip[places][to]" type="text" placeholder="Malte">
                        </label>
                    </div>

                    <div class="form__item">
                        <label>Vous n'avez pas d'idée précise ? Vous voulez visiter plusieurs endroits ? Dîtes nous à quoi vous pensez<br>
                            <textarea class="form__field form__textarea" name="trip[additionalInfo]" placeholder="J'adorerai partir une semaine cette été en Méditerrannée..."></textarea>
                        </label>
                    </div>
                </fieldset>


            </div> <!-- small container end -->
        </div><!-- section end -->

        <div class="form__section bl-yellow">
            <div class="small-container">

                <div class="form__section__title">
                    <h2 class="title--main--yellow">Quelles sont vos préférences ?</h2>
                    <p class="form__section__title__description">C'est dans cette section plus qu'ailleurs que Urtrip fait la différence ! Indiquez vos conditions, vos préférences et nos professionnels dénichent les meilleurs opportunités. Celles qui VOUS conviennent.</p>
                </div>

                <!-- moyens de transports -->
                <fieldset class="form__fieldset">
                    <legend>Transport</legend>
                    <div class="form__item">
                        <p>Je souhaite aller à destination via</p>
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="checkbox" value="plane" checked>Avion
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="checkbox" value="train">Train
                        </label><br>        
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="checkbox" value="bus">Car
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="checkbox" value="car">Voiture
                        </label>
                    </div>
                    <div class="form__item">
                        <p>Je souhaite garder le même mode de transport au retour</p>
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="radio" value="sameReturnTrip">Oui
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[transport][modes][]" type="radio" value="return can be different" checked>Cela ne m'importe peu
                        </label>
                    </div>
                    <div class="form__item">
                        <p>Mes préférences</p>
                        <label>
                            <input class="form__box" name="trip[transport][preference]" type="radio" value="cheap" checked>Le moins cher
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[transport][preference]" type="radio" value="comfy">Tout confort
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[transport][preference]" type="radio" value="fastest">Le plus rapide !
                        </label>
                    </div>

                </fieldset>

                <fieldset class="form__fieldset">
                    <legend>Sur Place</legend>

                    <div class="form__item">
                        <p>Sur place je souhaite</p>
                        <label>
                            <input class="form__box" name="trip[onSite][transport][]" type="checkbox" value="rentACar">Louer une voiture
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[onSite][transport][]" type="checkbox" value="buses" checked>Prendre les transports en commun
                        </label>
                    </div>
    
                    <!-- on site housing -->
                    <div class="form__item">
                        <p>Logement sur place</p>
                        <label>
                            <input class="form__box" name="trip[onSite][housing][]" type="checkbox" value="hostel" checked>Hotel
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[onSite][housing][]" type="checkbox" value="host">Chez l'habitant
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[onSite][housing][]" type="checkbox" value="camping">camping
                        </label><br>
                        <label>
                            <input class="form__box" name="trip[onSite][housing][]" type="checkbox" value="auberge">Auberge de jeunesse
                        </label>
                    </div>
                </fieldset>

                <fieldset class="form__fieldset">
                    <legend>Quel est votre budget ?</legend>

                    <!-- budget -->
                    <div class="form__item">
                        <label>Quel est votre buget maximal ? *<br>
                            <input class="form__field form__field--extra-small" name="trip[budget][max]" type="number" min="0" placeholder="5000" required><span> €</span>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Quel est votre buget minimal ? *<br>
                            <input class="form__field form__field--extra-small" name="trip[budget][min]" type="number" min="0" placeholder="100" required><span> €</span>
                        </label>
                    </div>
                </fieldset>
        
            </div> <!-- small container end -->
        </div> <!-- section end -->
        
        <div class="small-container">
            <div class="form__item mt-1">
                <input class="form__submit btn btn--large btn--blue" type="submit" name="submit" value="Envoyer">
            </div>
        </div>
            
    </form>

</div>