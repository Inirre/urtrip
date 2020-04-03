<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/95243ed3f6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <title>
        <?php if(isset($title)):?>
            <?= $title ?>
        <?php else: ?>
            <?= Urtrip ?>
        <?php endif ?>
    </title>
    
</head>
<body>
    <main>
        <header>

            <!-- navigation bar -->
            <nav id="nav" class="nav">

                <div class="logo">
                    <a href="index.php" class="logo__link"><img class="logo__img" src='images/urtrip_logo--white.png' alt="company logo">Urtrip</a>
                </div>
                
                <ul class="nav__list">
    
                    <li class="nav__item"><a href="index.php" class="nav__link hover__bg-o3">Acceuil</a></li>
                    <li class="nav__item"><a href="my_trip.php" class="nav__link hover__bg-o3">Mon Voyage</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link hover__bg-o3">A Propos</a></li>
                    <li class="nav__item"><a href="contacts.php" class="nav__link hover__bg-o3">Contacts</a></li>
                    <li class="nav__item ml-auto"><a href="https://www.facebook.com/urtripvoyage/" target="_blank" class="nav__link nav__icon hover__bg-o3"><i class="fab fa-facebook"></i></a></li>
                    <li class="nav__item"><a href="mailto:valentin.dupont.urtrip@gmail.com" class="nav__link nav__icon hover__bg-o3"><i class="fas fa-envelope"></i></a></li>
                    <li class="nav__item"><a href="tel:+33615732042" class="nav__link nav__icon hover__bg-o3"><i class="fas fa-phone"></i></a></li>
                
                </ul>

                <div class="burger hover__bg-o3">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            
            </nav>

        </header>