<div class="form">
        
    <form id="urtripForm" name="urtripForm" action="form-process.php" method="POST">

        <div class="form__item">
            <p class="form__note">* Les champs marqués d'un astérisque sont obligatoires</p>
        </div>
    
        <!-- ajouter tabs pour chaque section -->

        <div id="formSection1" class="form__section bl-blue">

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
                            <input class="form__field requiredInput" onchange="feedSummary(event)" name="Prénom" type="text" placeholder="Jean" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Nom *<br>
                            <input class="form__field requiredInput" onchange="feedSummary(event)" name="Nom" type="text" placeholder="Dupond" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Date de naissance *<br>
                            <select class="form__field form__field--extra-small requiredInput" onchange="feedSummary(event)" name="Date_de_naissance[]" required>
                                <option value="" selected="selected" disabled hidden>Jour</option>
                                <?php for($i = 1; $i <= 31; $i++): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                            <select class="form__field form__field--extra-small requiredInput" onchange="feedSummary(event)" name="Date_de_naissance[]" required>
                                <option value="" selected="selected" disabled hidden>Mois</option>
                                <?php for($i = 1; $i <= 12; $i++): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                            <select class="form__field form__field--extra-small requiredInput" onchange="feedSummary(event)" name="Date_de_naissance[]" required>
                                <option value="" selected="selected" disabled hidden>Année</option>
                                <?php for($i = (int)date("Y"); $i >= 1900; $i--): ?>
                                    <?= "<option value='$i'>$i</option>" ?>
                                <?php endfor ?>
                            </select>
                        </label>
                    </div>
                    <!-- Mail Phone -->
                    <div class="form__item">
                        <label>Adresse email *<br>
                            <input class="form__field requiredInput" onchange="feedSummary(event)" id="emailAddress" name="Email" type="email" placeholder="jean.dupond@email.com" required>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Numéro de téléphone<br>
                            <input class="form__field form__field--small" onchange="feedSummary(event)" name="Téléphone" type="tel" placeholder="06 12 34 56 78">
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Métier<br>
                            <input class="form__field" onchange="feedSummary(event)" name="Métier" type="text" placeholder="Enseignant">
                        </label>
                    </div>
                </fieldset>



            </div> <!-- small container end -->
            

        
        </div> <!-- form section end -->

        <div id="formSection2" class="form__section bl-green">

            <div class="small-container">
                
                <div class="form__section__title">
                    <h2 class="title--main--green">Votre Voyage débute ici</h2>
                    <p class="form__section__title__description">Avez-vous une idée précise ? Souhaitez-vous simplement vous echapper à moindre coût ? Remplissez le plus de champs possibles pour en fonction de vos envies !</p>
                </div>


                <!-- Global info on trip and travellers -->
                <div class="form__item">
                    <label>De quel type de voyage s'agit-il ?<br>
                        <select class="form__field" onchange="feedSummary(event)" name="Type_de_voyage">
                            <option value="" selected="selected" disabled hidden>type de voyage</option>
                            <option value="Loisir">Loisir</option>
                            <option value="Professionel">Professionel</option>
                            <option value="Evènement">Evènement (EVG, EVJF, Noce, autre...)</option>
                        </select>
                    </label>
                </div>

                <fieldset class="form__fieldset">
                    <legend>Qui voyage ?</legend>

                    <div class="form__item">
                        <label>Combien de voyageurs majeurs ?<br>
                            <input class="form__field form__field--extra-small" onchange="feedSummary(event)" name="Adultes" type="number" min="0" placeholder="0">
                        </label>
                    </div>
                    <div class="form__item hidden minors">
                        <label>Combien de jeunes voyageurs ? (5-18 ans) ?<br>
                            <input class="form__field form__field--extra-small" onchange="feedSummary(event)" name="Mineurs" type="number" min="0" placeholder="0">
                        </label>
                    </div>
                    <div class="form__item hidden minors">
                        <label>Combien d'enfants (moins de 5 ans) ?<br>
                            <input class="form__field form__field--extra-small" onchange="feedSummary(event)" name="Enfants" type="number" min="0" placeholder="0">
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
                            <div id="tabTimeDate" class="tab__card tab__card--blue hoover__shadow">
                                Je connais les dates du voyage
                            </div>
                            <div id="tabTimeDuration" class="tab__card hoover__shadow">
                                Je sais combien de temps je veux partir
                            </div>
                        </div>
                    </div>

                    <div id="contentTimeDate" class="form__item">
                        <div class="form__row">
                            <div id="dateDepartureContainer">
                                <label>Ma date de départ<br>
                                    <div class="form__flex__row">
                                        <div class="form__field__date__icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <input class="form__field__date" onchange="feedSummary(event)" type="text" id="dateDeparture" name="Départ_le">
                                    </div>
                                </label>
                            </div>
                            <div id="dateReturnContainer">
                                <label>Ma date de retour<br>
                                    <div class="form__flex__row">
                                        <div class="form__field__date__icon">
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                        <input class="form__field__date" onchange="feedSummary(event)" type="text" id="dateReturn" name="Retour_le">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form__item hidden" id="contentTimeDuration">
                        <label>Je souhaite partir...<br>
                            <input class="form__field form__field--extra-small" onchange="feedSummary(event)" name="Durée[]" type="number" min="0" placeholder="14">
                            <select class="form__field form__field--extra-small" onchange="feedSummary(event)" name="Durée[]">
                                <option value="Jours">Jours</option>
                                <option value="Semaines">Semaines</option>
                                <option value="Mois">Mois</option>
                            </select>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Mon lieu de départ<br>
                            <input class="form__field" onchange="feedSummary(event)" name="De" type="text" placeholder="Angers">
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Je souhaite voyager à<br>
                            <input class="form__field" onchange="feedSummary(event)" name="A" type="text" placeholder="Malte">
                        </label>
                    </div>

                    <div class="form__item">
                        <label>Vous n'avez pas d'idée précise ? Vous voulez visiter plusieurs endroits ? Dîtes nous à quoi vous pensez<br>
                            <textarea class="form__field form__textarea" onchange="feedSummary(event)" name="Note" placeholder="J'adorerai partir une semaine cette été en Méditerrannée..."></textarea>
                        </label>
                    </div>
                </fieldset>


            </div> <!-- small container end -->
        </div><!-- section end -->

        <div id="formSection3" class="form__section bl-yellow">
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
                            <input class="form__box" onchange="feedSummary(event)" name="Mode_de_transport[]" type="checkbox" value="Avion" feedSummary(event)>Avion
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Mode_de_transport[]" type="checkbox" value="Train">Train
                        </label><br>        
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Mode_de_transport[]" type="checkbox" value="Car">Car
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Mode_de_transport[]" type="checkbox" value="Voiture">Voiture
                        </label>
                    </div>
                    <div class="form__item">
                        <p>Je souhaite garder le même mode de transport au retour</p>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Retour" type="radio" value="Même_transport">Oui
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Retour" type="radio" value="">Cela ne m'importe peu
                        </label>
                    </div>
                    <div class="form__item">
                        <p>Mes préférences</p>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Préférence" type="radio" value="Le_moins_cher" feedSummary(event)>Le moins cher
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Préférence" type="radio" value="Tout_confort">Tout confort
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Préférence" type="radio" value="Le_plus_rapide">Le plus rapide !
                        </label>
                    </div>

                </fieldset>

                <fieldset class="form__fieldset">
                    <legend>Sur Place</legend>

                    <div class="form__item">
                        <p>Sur place je souhaite</p>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Transport_sur_place[]" type="checkbox" value="Location_de_voiture">Louer une voiture
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Transport_sur_place[]" type="checkbox" value="Transports_en_commmun">Prendre les transports en commun
                        </label>
                    </div>
    
                    <!-- on site housing -->
                    <div class="form__item">
                        <p>Logement sur place</p>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Logement[]" type="checkbox" value="Hotel">Hotel
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Logement[]" type="checkbox" value="Chez_l'habitant">Chez l'habitant
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Logement[]" type="checkbox" value="Camping">camping
                        </label><br>
                        <label>
                            <input class="form__box" onchange="feedSummary(event)" name="Logement[]" type="checkbox" value="Auberge_de_jeunesse">Auberge de jeunesse
                        </label>
                    </div>
                </fieldset>

                <fieldset class="form__fieldset">
                    <legend>Quel est votre budget ?</legend>

                    <!-- budget -->
                    <div class="form__item">
                        <label>Quel est votre buget maximal ? *<br>
                            <input class="form__field form__field--extra-small requiredInput" onchange="feedSummary(event)" name="Budget_max" type="number" min="0" placeholder="5000" required><span> €</span>
                        </label>
                    </div>
                    <div class="form__item">
                        <label>Quel est votre buget minimal ? *<br>
                            <input class="form__field form__field--extra-small requiredInput" onchange="feedSummary(event)" name="Budget_min" type="number" min="0" placeholder="100" required><span> €</span>
                        </label>
                    </div>
                </fieldset>
        
            </div> <!-- small container end -->
        </div> <!-- section end -->  

    </form>
    

</div>
