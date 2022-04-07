<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trombinoscope </title>
</head>

<body>

    <div class="container">
        @include('header')
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="nav-toggle">
            <label for="nav-toggle" class="navigation__button">
                <span class="navigation__icon" aria-label="toggle navigation menu"></span>
            </label>
            <div class="navigation__background"></div>

            <nav class="navigation__nav" role="navigation">
                <ul class="navigation__list">
                    <li class="navigation__item">
                        <a href="/direction" class="navigation__link">Direction</a>
                    </li>
                    <li class="navigation__item">
                        <a href="/servicepedago" class="navigation__link">Service pédagogique</a>
                    </li>
                    <li class="navigation__item">
                        <a href="serviceadm" class="navigation__link">Service administratif</a>
                    </li>
                    <li class="navigation__item">
                        <a href="reen" class="navigation__link">REEN</a>
                    </li>
                    <li class="navigation__item">
                        <a href="serviceadmiss" class="navigation__link">Service des admissions</a>
                    </li>
                    <li class="navigation__item">
                        <a href="blu" class="navigation__link">BLU</a>
                    </li>
                    <li class="navigation__item">
                        <a href="studio" class="navigation__link">Studio</a>
                    </li>
                    <li class="navigation__item">
                        <a href="rh" class="navigation__link">RH</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="text">
            <h2>Bienvenue dans le trombinoscope de l'ETNA</h2>
            <a>Cliquez sur le menu pour afficher les différents services</a>
        </div>
        @include('footer')
    </div>

</body>

</html>
