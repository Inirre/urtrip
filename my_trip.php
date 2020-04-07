<?php
$title = 'Mon voyage';
require 'header.php';
?>

<div class="my-trip first-div">

    <div class="main-container">

        <div class="form">
        
            <form action="my_trip.php" method="post">
            
                <div class="form__section section-marker section-marker--1">

                    <div class="small-container">

                        <div class="form__section__title">
                            <h2 class="form__section__title__main section__title--1">A propos de vous</h2>
                            <p class="form__section__title__description">Pour nous permettre de mieux vous connaître et vous accompagner tout le long du processus.</p>
                        </div>
        
                        <!-- First Name Last Name -->
                        <fieldset class="form__fieldset">
                            <legend>Vos coordonnées</legend>
                            
                            <div class="form__item mt-0">
                                <label>Prénom *<br>
                                    <input class="form__field" name="senderFirstName" type="text" placeholder="Jean" required>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Nom *<br>
                                    <input class="form__field" name="senderLastName" type="text" placeholder="Dupond" required>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Année de naissance<br>
                                    <select class="form__field form__field--extra-small" name="senderBirthYear">
                                        <option value="undefined" selected="selected" disabled hidden>Année</option>
                                        <?php for($i = 1900; $i <= (int)date("Y"); $i++): ?>
                                            <?= "<option value='$i'>$i</option>" ?>
                                        <?php endfor ?>
                                    </select>
                                </label>
                            </div>
                            <!-- Mail Phone -->
                            <div class="form__item">
                                <label>Adresse email *<br>
                                    <input class="form__field" id="senderEmail" name="senderEmail" type="email" placeholder="jean.dupond@email.com" required>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Numéro de téléphone<br>
                                    <input class="form__field form__field--small" name="senderPhone" type="tel" placeholder="06 12 34 56 78">
                                </label>
                            </div>
                            <!-- CSP métier -->
                            <div class="form__item">
                                <label>Catégorie socioprofessionelle<br>
                                    <select class="form__field" name="senderWorkCategory">
                                        <option value="undefined" selected="selected" disabled hidden>Catégorie</option>
                                        <option value="Agriculteurs exploitants">Agriculteurs exploitants</option>
                                        <option value="Artisans, commerçants et chefs d’entreprise">Artisans, commerçants et chefs d’entreprise</option>
                                        <option value="Cadres et professions intellectuelles supérieures">Cadres et professions intellectuelles supérieures</option>
                                        <option value="Professions intermédiaires">Professions intermédiaires</option>
                                        <option value="Employés">Employés</option>
                                        <option value="Ouvriers">Ouvriers</option>
                                        <option value="Retraités">Retraités</option>
                                        <option value="Autres personnes sans activité professionnelle">Autres personnes sans activité professionnelle</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Métier<br>
                                    <input class="form__field" name="senderWork" type="text" placeholder="Enseignant">
                                </label>
                            </div>
                        </fieldset>

        

                    </div> <!-- small container end -->
                    

                
                </div> <!-- form section end -->

                <div class="form__section section-marker section-marker--2">

                    <div class="small-container">
                        <div class="form__section__title">
                            <h2 class="form__section__title__main section__title--2">Votre Voyage débute ici</h2>
                            <p class="form__section__title__description">Avez-vous une idée précise ? Souhaitez-vous simplement vous echapper à moindre coût ? Remplissez le plus de champs possibles pour en fonction de vos envies !</p>
                        </div>

    
                        <!-- Global info on trip and travellers -->
                        <div class="form__item">
                            <label>De quel type de voyage s'agit-il ?<br>
                                <select class="form__field" name="senderTripType">
                                    <option value="undefined" selected="selected" disabled hidden>Choisir un type de voyage</option>
                                    <option value="Personel">Loisir</option>
                                    <option value="Professionel">Professionel</option>
                                    <option value="Evenement">Evènement (EVG, EVJF, Noce, autre...)</option>
                                </select>
                            </label>
                        </div>
                        <fieldset class="form__fieldset">
                            <legend>Qui voyage ?</legend>

                            <div class="form__item mt-0">
                                <label>Combien de voyageurs majeurs ?<br>
                                    <input class="form__field form__field--extra-small" name="senderNumberOfAdults" type="number" placeholder="0">
                                </label>
                            </div>
                            <div class="form__item">
                                <p class="clickable" id="addMinors">+ Ajouter des voyageurs mineurs</p>
                            </div>
                            <div class="form__item hidden minors">
                                <label>Combien de jeunes voyageurs ? (5-18 ans) ?<br>
                                    <input class="form__field form__field--extra-small" name="senderNumberOfMinors" type="number" placeholder="0">
                                </label>
                            </div>
                            <div class="form__item hidden minors">
                                <label>Combien d'enfants (moins de 5 ans) ?<br>
                                    <input class="form__field form__field--extra-small" name="senderNumberOfChildren" type="number" placeholder="0">
                                </label>
                            </div>
                        </fieldset>
    
                        
                        
                        <!-- infos on destinations -->
                        <fieldset class="form__fieldset">
                            <legend>Dates et Lieux</legend>
                            <!-- Info on dates -->
                            <div class="form__row">
                                <div class="form__item mt-0" id="dateStartContainer">
                                    <label>Ma date de départ<br>
                                        <input class="form__field" type="text" id="dateStart">
                                    </label>
                                </div>
                                <div class="form__item mt-0" id="dateEndContainer">
                                    <label>Ma date de retour<br>
                                        <input class="form__field" type="text" id="dateEnd">
                                    </label>
                                </div>
                            </div>
        
                            <div class="form__item">
                                <label>Je souhaite partir...<br>
                                    <input class="form__field form__field--extra-small" name="tripLength[]" type="number" placeholder="0">
                                    <select class="form__field form__field--extra-small" name="tripLength[]">
                                        <option value="jour">Jour(s)</option>
                                        <option value="semaine">Semaine(s)</option>
                                        <option value="mois">Mois</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Mon lieu de départ<br>
                                    <input class="form__field" name="tripFrom" type="text" placeholder="Angers">
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Je souhaite voyager à<br>
                                    <input class="form__field" name="tripTo" type="text" placeholder="Angers">
                                </label>
                            </div>
    
                            <div class="form__item">
                                <label>Vous n'avez pas d'idée précise ? Vous voulez visiter plusieurs endroits ? Dîtes nous à quoi vous pensez<br>
                                    <textarea class="form__field form__textarea" name="tripDateMessage" placeholder="J'adorerai partir une semaine cette été..."></textarea>
                                </label>
                            </div>
                        </fieldset>
    

                    </div> <!-- small container end -->
                </div><!-- section end -->

                <div class="form__section section-marker section-marker--3">
                    <div class="small-container">

                        <div class="form__section__title">
                            <h2 class="form__section__title__main section__title--3">Quelles sont vos préférences ?</h2>
                            <p class="form__section__title__description">C'est dans cette section plus qu'ailleurs que Urtrip fait la différence ! Indiquez vos conditions, vos préférences et nos professionnels dénichent les meilleurs opportunités. Celles qui VOUS conviennent.</p>
                        </div>

                        <!-- moyens de transports -->
                        <fieldset class="form__fieldset">
                            <legend>Transport</legend>
                            <div class="form__item mt-0">
                                <p>Je souhaite aller à destination via</p>
                                <label>
                                    <input class="form__box" name="transport[]" type="checkbox" value="plane">Avion
                                </label><br>
                                <label>
                                    <input class="form__box" name="transport[]" type="checkbox" value="train">Train
                                </label><br>        
                                <label>
                                    <input class="form__box" name="transport[]" type="checkbox" value="bus">Car
                                </label><br>
                                <label>
                                    <input class="form__box" name="transport[]" type="checkbox" value="car">Voiture
                                </label>
                            </div>
                            <div class="form__item">
                                <p>Je souhaite garder le même mode de transport au retour</p>
                                <label>
                                    <input class="form__box" name="transportBack" type="radio" value="oui">Oui
                                </label><br>
                                <label>
                                    <input class="form__box" name="transportBack" type="radio" value="non">Cela ne m'importe peu
                                </label>
                            </div>
                            <div class="form__item">
                                <p>Mes préférences</p>
                                <label>
                                    <input class="form__box" name="transportPreference" type="checkbox" value="cheap">Le moins cher
                                </label><br>
                                <label>
                                    <input class="form__box" name="transportPreference" type="checkbox" value="comfy">Tout confort
                                </label><br>
                                <label>
                                    <input class="form__box" name="transportPreference" type="checkbox" value="fastest">Le plus rapide !
                                </label>
                            </div>

                        </fieldset>

                        <fieldset class="form__fieldset">
                            <legend>Sur Place</legend>

                            <div class="form__item mt-0">
                                <p>Sur place je souhaite</p>
                                <label>
                                    <input class="form__box" name="transportOnSite[]" type="checkbox" value="rentACar">Louer une voiture
                                </label><br>
                                <label>
                                    <input class="form__box" name="transportOnSite[]" type="checkbox" value="buses">Prendre les transports en commun
                                </label>
                            </div>
            
                            <!-- on site housing -->
                            <div class="form__item">
                                <p>Logement sur place</p>
                                <label>
                                    <input class="form__box" name="housing[]" type="checkbox" value="hotel">Hotel
                                </label><br>
                                <label>
                                    <input class="form__box" name="housing[]" type="checkbox" value="host">Chez l'habitant
                                </label><br>
                                <label>
                                    <input class="form__box" name="housing[]" type="checkbox" value="camping">camping
                                </label><br>
                                <label>
                                    <input class="form__box" name="housing[]" type="checkbox" value="auberge">Auberge de jeunesse
                                </label>
                            </div>
                        </fieldset>
        
                        <fieldset class="form__fieldset">
                            <legend>Quel est votre budget ?</legend>

                            <!-- budget -->
                            <div class="form__item mt-0">
                                <label>Quel est votre buget maximal ?<br>
                                    <input class="form__field form__field--extra-small" name="budgetMax" type="number" placeholder="0"><span> €</span>
                                </label>
                            </div>
                            <div class="form__item">
                                <label>Quel est votre buget minimal ?<br>
                                    <input class="form__field form__field--extra-small" name="budgetMin" type="number" placeholder="0"><span> €</span>
                                </label>
                            </div>
                        </fieldset>
                
                    </div> <!-- small container end -->
                </div> <!-- section end -->
                    
            </form>
        
        </div>

    </div>

</div>

<?php
require 'footer.php'
?>