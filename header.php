<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">

    <?php if($title == 'Mon voyage') : ?>
        <link rel="stylesheet" href="CSS/stripe/global.css"/>
    <?php endif ?>
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    
    <!-- flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/95243ed3f6.js" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

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
                    <li class="nav__item"><a href="urtrip-form.php" class="nav__link hover__bg-o3">Mon Voyage</a></li>
                    <li class="nav__item"><a href="about.php" class="nav__link hover__bg-o3">A Propos</a></li>
                    <li class="nav__item"><a href="contact.php" class="nav__link hover__bg-o3">Contact</a></li>
                    <li class="nav__item ml-auto"><a href="https://www.facebook.com/urtripvoyage/" target="_blank" class="nav__link nav__icon hover__bg-o3"><i class="fab fa-facebook"></i><p class="nav__icon__label">Facebook</p></a></li>
                
                </ul>

                <div class="burger hover__bg-o3">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            
            </nav>

        </header>