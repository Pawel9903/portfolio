<!doctype html>
<html lang="pl">
<head>
    <title>Paweł Ged - CV</title>
    <meta name="keywords" content="pawel ged, Paweł Ged, php, portfolio, cv, junior, staz, praca, programista, projekty">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/animate.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery.transit/jquery.transit.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Caveat|Cinzel|Exo+2|Hind|Maven+Pro" rel="stylesheet">
</head>
<body class="c-body">
<?php include ("views/template/topMenu.php"); ?>

<section>
    <header>
        <?php include ("views/template/jumbo.php"); ?>
    </header>
</section>
<section>
    <article>
        <div class="container animate-right">
            <div class="c-base-section" id="aboutMe">
                <h1 class="c-base-header">O mnie</h1>
                <p class="c-base-text">
                    Nazywam się Paweł Ged, mieszkam w Redzie i studiuję zaocznie programowanie. Aktualnie pracuję w gastronomii oraz jestem na V semestrze studiów inżynierskich. Poza programem nauczania przerabiam również dodatkowe kursy (głównie online ale również stacjonarne). Szukam miejsca, w którym mógłbym uczyć się codziennie a nie tylko jak dotychczas w wolnych chwilach, sprawdzić swoje dotychczas zdobyte umiejętności jak również zdobyć nowe doświadczenie. Jeżeli będą Państwo zainteresowani zapraszam do zapoznania się z moimi projektami oraz do kontaktu mailowego: kontakt@pawelged.pl lub wypełnienie formularza kontaktowego znajdującego się na dole strony jak również telefoniecznie: 695 799 703.</p>

                <a href="cv.php" target="_blank" >Klasyczne CV w formacie PDF</a>
            </div>
        </div>
    </article>
    <div class="c-base-img-background">
        <div class="c-base-top-triangle"></div>
        <div class="img-fluid c-img"></div>
        <div class="c-base-bottom-triangle"></div>
    </div>
</section>
<section>
    <div class="container">
        <div class="c-base-section" id="skills">
            <h1 class="c-base-header">Moje umiejętności</h1>
            <h4>Podstawowa znajomość:</h4>
                <div class="c-skills animate-left">
                    <h5>Front-end:</h5>
                    <br>
                    <img class="c-logo" src="images/logo/html.png">
                    <img class="c-logo" src="images/logo/css.png">
                    <img class="c-logo" src="images/logo/javascript.png">
                    <img class="c-logo" src="images/logo/jquery.png">
                    <img class="c-logo" src="images/logo/bootstrap.png">
                    <img class="c-logo" src="images/logo/sass.png">
                    <h5>HTML|CSS|JS|JQuery|Bootstrap</h5>
                    <p class="c-base-text">
                        Swoją naukę zaczynałem od HTML oraz CSS jednak były to statyczne projekty. Następnie sięgnąłem po JavaScript oraz bibliotekę jQuery, której dalej używam do animacji m.in. strony, na której się znajdujesz. Do przesyłania danych z formularzy do skryptu PHP używam biblioteki Ajax. Przez ostatnie pół roku uczyłem się również frameworku Bootstrap 4 oraz preprocesorów Sass. </p>
                </div>

            <div class="c-skills animate-left">
                <h5>Back-end:</h5>
                <br>
                <img class="c-logo" src="images/logo/php.png">
                <img class="c-logo" src="images/logo/sf.png">
                <img class="c-logo" src="images/logo/csharp.png">
                <h5>PHP|Symfony|C#</h5>
                <p class="c-base-text">
                    Najwięcej nauki poświęciłem jednak dla PHP i jest to moja najmocniesza strona. Poznałem ten język na studiach i równocześnie zacząłem się go uczyć dla siebie w domu. W PHP potrafie pisać obiektowo oraz łączyć się z bazą danych poprzez PDO. Uczyłem się frameworku Laravel jednak po przerobieniu kursu postanowiłem przejść na Symfony 3/4. Jeżeli chodzi o C# to uczę sie go głównie na studiach od pierwszego semestru.</p>
            </div>

                <div class="c-skills animate-left">
                <h5>Bazy danych:</h5>
                <br>
                <img class="c-logo" src="images/logo/mysql.png">
                <img class="c-logo" src="images/logo/sqlite.png">
                    <h5>MySQL|SQLite</h5>
                    <p class="c-base-text">
                    Bazy danych uczyłem się ich na studiach oraz w domu.</p>
            </div>

            <div class="c-skills animate-left">
                <h5>Technologie, z którymi miałem styczność m.in. na studiach lub kursach i znam je w mniejszym stopniu:</h5>
                <br>
                <img class="c-logo" src="images/logo/cpp.png">
                <img class="c-logo" src="images/logo/mongo.png">
                <img class="c-logo" src="images/logo/node.png">
                <img class="c-logo" src="images/logo/laravel.png">
                <h5>C++|MongoDB|NodeJS|Laravel</h5>
                <p class="c-base-text">
                    Są to technologie, których potrafię używać w minimalnym stopniu.</p>
            </div>
        </div>
    </div>
</section>

<div class="c-base-img-background">
    <div class="c-base-top-triangle"></div>
    <div class="img-fluid c-img-2"></div>
</div>

<section class="bg-light">
    <div class="container">
        <div class="c-base-section" id="portfolio">
            <h1 class="c-base-header">Moje Projekty</h1>
            <p>Zapraszam do sprawdzenia moich projektów wraz z odnośnikami do repozytorium. Umieściłem tutaj tylko autorskie prace, które pisałem sam bez przepisywania kursów.</p>
        </div>

        <div class="c-portfolio-div">
                <div class="c-portfolio-item bg-light animate-left">
                    <a target="_blank" href="http://budged.pl"><img class="img-fluid c-img-portfolio" src="images/porfolio/screencapture-budged-pl-start-2018-06-06-20_17_04.png"></a>

                    <b>Strona dla firmy budowlanej</b>
                    <p>Strona internetowa dzięki, której uczyłem się bootstrap'a 4, preprocesorów Sass oraz animacji w JQuery.</p>
                    <a target="_blank" href="https://github.com/Pawel9903/strona-dla-firmy-budowlanej"><img class="c-jumbo-img-logo-media" src="../../images/logo/github.jpg"></a>
                </div>

                <div class="c-portfolio-item bg-light animate-right">
                    <a target="_blank" href="https://pawel9903.github.io/strona-dla-fotografa"><img class="img-fluid c-img-portfolio" src="images/porfolio/screencapture-pawel9903-github-io-strona-dla-fotografa-2018-06-06-20_18_38.png"></a>
                    <b>Strona dla fotografa</b>
                    <p>Mój pierwszy projekt jaki stworzyłem. Jest napisany w czystym css, html oraz JQuery.</p>
                        <a target="_blank" href="https://github.com/Pawel9903/strona-dla-firmy-budowlanej"><img class="c-jumbo-img-logo-media" src="../../images/logo/github.jpg"></a>
            </div>

                <div class="c-portfolio-item bg-light animate-left">
                    <a target="_blank" href="http://kontakty1.cba.pl/"><img class="img-fluid c-img-portfolio" src="images/porfolio/screencapture-kontakty1-cba-pl-registration-php-2018-06-06-20_15_59.png"></a>
                    <b>Kontakty w php</b>
                    <p>Projekt na studia napisany w języku PHP. Jako, że chciałem uczyć się tego języka postanowiłem, że poświęce wiecej czasu i napisze jakiś projekt poza testem na ocenę. Jest to projekt z logowaniem, rejestracją, walidacją oraz dodawaniem, edycją, usywaniem kontaktów z bazy danych. Każdy użytkownik może zarządzać swoimi kontaktami w bazie.</p>
                    <a target="_blank" href="https://github.com/Pawel9903/contacts-php-first-repository"><img class="c-jumbo-img-logo-media" src="../../images/logo/github.jpg"></a>
                </div>

                <div class="c-portfolio-item bg-light animate-right">
                    <a target="_blank" href="http://contacts.cba.pl/web/"><img class="img-fluid c-img-portfolio" src="images/porfolio/screencapture-contacts-cba-pl-web-2018-06-06-20_19_46.png"></a>
                    <b>Kontakty w Symfony</b>
                        <p>Rozszeżenie projektu z kontaktami i napisanie go w Symfony 3/4. Poza tym co było w projekcie "Kontakty w php" znajduję sie również translacja PL/ENG oraz dodawanie zdjęć kontaktów oraz wyświetlanie kontaktów innych użytkowaników. Front-End został rzszeżony o Bootstrap 4.</p>
                    <a target="_blank" href="https://github.com/Pawel9903/contacts-symfony-3.4"><img class="c-jumbo-img-logo-media" src="../../images/logo/github.jpg"></a>
                </div>

                <div class="c-portfolio-item bg-light animate-left">
                    <a target="_blank" href="http://modeloceniania.cba.pl"><img class="img-fluid c-img-portfolio" src="images/porfolio/screencapture-localhost-8000-list_p-php-1519845420256.png"></a>
                    <b>Model oceniania</b>
                    <p>Jest to aplikacja z możliwością dodania zdjecia produktu/firmy/inne wraz z upload'em tworzy się minaiturka oraz link do pobrania zdjęcia w pełnym wymiarze. Przy formularzu dodawania jest również możliwość oceny, komentarza, oraz dodania nazwy. Wszystko wyświetla się na głownej stronie wraz z paginacją co 5 pozycji. Użyłem do tego PHP oraz bootstrap 4. </p>
                    <a target="_blank" href="https://github.com/Pawel9903/Model-oceniania"><img class="c-jumbo-img-logo-media" src="../../images/logo/github.jpg"></a>
                </div>
        </div>
        <div class="text-center">
            <h5 class="c-base-header">Dziękuję za uwagę, wkrótce dodam więcej projektów.</h5>
        </div>
    </div>
</section>
<footer>
    <?php include ("views/template/footer.php")?>
</footer>
<script type="text/javascript" src="source/js/jquery.viewportchecker.min.js"></script></body>
<script rel="script" src="source/js/custom.js"></script>
</html>