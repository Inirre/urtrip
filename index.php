<?php
$title = 'Accueil';
require 'header.php';
?>


<!-- banner section -->

<div class="banner banner__index first-div">

    <div class="main-container index-flex">

        <div class="card">
            
            <h1 class="card__title">Lorem Ipsum</h1>
            <h3 class="card__content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus quos modi quibusdam facere molestiae, esse placeat dolorum nulla, nemo cumque vitae, ipsum iste consectetur reprehenderit debitis sapiente fugit! Magnam, qui?</h3>
            
            <a href="my_trip.php">
                <div class="btn btn--blue">Button</div>
            </a>
            
        </div>


        <div class="img__container">
            <div class="img__top-bar">
                <div class="img__top-bar__button img__top-bar__button--red"></div>
                <div class="img__top-bar__button img__top-bar__button--yellow"></div>
                <div class="img__top-bar__button img__top-bar__button--green"></div>
            </div>
            <div class="img__content">

                <div class="img__title">
                    <img class="img__logo" src='images/urtrip_logo--black.png' alt="company logo">
                    <p>URTRIP</p>
                </div>

                <div class="img__label">
                    Mes destinations
                </div>
                <div class="img__input">
                    Malte, Londres, Paris ...
                </div>

                <div class="img__label">
                    Départ
                </div>
                <div class="img__input">
                    10/08/2020
                </div>

                <div class="img__label">
                    Quels transports ?
                </div>
                
                <div class="img__input__boxes">
                    <div class="img__input__box img__input__box--checked"></div>
                    <div class="img__input__box__label">Avion</div>
                </div>

                <div class="img__input__boxes">
                    <div class="img__input__box"></div>
                    <div class="img__input__box__label">Train</div>
                </div>

                <div class="img__input__boxes">
                    <div class="img__input__box"></div>
                    <div class="img__input__box__label">Bus</div>
                </div>

                <div class="img__input__random img__input__random--1"></div>
                <div class="img__input__random img__input__random--2"></div>
                <div class="img__input__random img__input__random--3"></div>


                <div class="img__submit">
                    <i class="fas fa-paper-plane"></i>
                    <i class="fas fa-hand-pointer img__pointer"></i>
                    <div class="img__click"></div>
                </div>

            </div>
        </div>





    </div>

</div>


<!-- fonctionnement de urtrip -->

<section class="concepts">

    <div class="main-container">

        <div class="concept">

            <div class="concept__description">
                <h2 class="concept__title">Lorem Ipsum</h2>
                <p class="concept__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit voluptates inventore tenetur cupiditate iusto placeat dolore voluptatibus provident quaerat ullam exercitationem, eum itaque suscipit cumque pariatur temporibus sunt modi?</p>
            </div>
            <div>
                <img class="concept__img" src="images/undraw_fill_forms_yltj.svg" alt="chilling image"> 
            </div>
            
        </div>
        
        <div class="concept">

            <div>
                <img class="concept__img" src="images/undraw_forming_ideas_0pav.svg" alt="chilling image"> 
            </div>
            <div class="concept__description">
                <h2 class="concept__title">Lorem Ipsum</h2>
                <p class="concept__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit voluptates inventore tenetur cupiditate iusto placeat dolore voluptatibus provident quaerat ullam exercitationem, eum itaque suscipit cumque pariatur temporibus sunt modi?</p>
            </div>

        </div>

        <div class="concept">

            <div class="concept__description">
                <h2 class="concept__title">Lorem Ipsum</h2>
                <p class="concept__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit voluptates inventore tenetur cupiditate iusto placeat dolore voluptatibus provident quaerat ullam exercitationem, eum itaque suscipit cumque pariatur temporibus sunt modi?</p>
            </div>
            <div>
                <img class="concept__img" src="images/undraw_chilling_8tii.svg" alt="chilling image"> 
            </div>
            
        </div>

        <div class="concept">

            <div>
                <img class="concept__img" src="images/undraw_done_a34v.svg" alt="chilling image"> 
            </div>
            <div class="concept__description">
                <h2 class="concept__title">Lorem Ipsum</h2>
                <p class="concept__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum velit voluptates inventore tenetur cupiditate iusto placeat dolore voluptatibus provident quaerat ullam exercitationem, eum itaque suscipit cumque pariatur temporibus sunt modi?</p>
            </div>

        </div>

    </div>

</section>

<?php
require 'footer.php'
?>