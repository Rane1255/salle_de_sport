<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <p>Profitez de notre offre exceptionnelle : 1 mois gratuit</p>
        <div class="menu">
            <nav class="nav_menu">
                <ul class="nav_links">
                    <li class="accueil"><a href="./">Accueil</a></li>
                    <li><a href="{{ route('cours.index') }}">Cours</a></li>
                    <li><a href="{{ route('tarifs.index') }}">Tarifs</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                    <li><a href="{{ route('mentions-legales.index') }}">Mentions Légales</a></li>
                </ul>
            </nav>
            <div class="logo">
                <h1>Fitness Force</h1>
            </div>
        </div>
        <a class="rejoindre" href="{{ route('contact.index') }}">S'INSCRIRE</a>
    </header>
    
    <!-- appel à la fonction @section("content") ... @endsection dans les autres pages-->
    @yield('content')
    <!-- @section("content")
    @show -->
    
    <footer>

        <div class="mon_footer_1">
            
            <div class="logo">
                <h1>Fitness Force</h1>
            </div>

            <div class="col2">    
                <h3>Menu</h3>
                <nav class="nav_menu_footer">
                    <ul class="nav_links_footer">
                        <li><a href="./">Accueil</a></li>
                        <li><a href="{{ route('cours.index') }}">Cours</a></li>
                        <li><a href="{{ route('tarifs.index') }}">Tarifs</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        <li><a href="{{ route('mentions-legales.index') }}">Mentions Légales</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col3">
                <h3>Retrouvez-nous</h3>
                <div class="reseaux_sociaux">
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="https://fr.linkedin.com/"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a href="https://www.youtube.com/"><ion-icon name="logo-youtube"></ion-icon></a>
                    <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://www.tiktok.com/"><ion-icon name="logo-tiktok"></ion-icon></a>

                </div>
            </div>

        </div>

        <div class="mon_footer_2">
            <p>@2024 Copyrights FitnessForce</p>
        </div>

    </footer>



    <!-- Police écriture -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Dirt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Rubik+Dirt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Frijole&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Sheppards&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">

    <!--icon-->
    <script type="module"
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule
            src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>