<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Dames 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>

    <header class="cd-header">
        <div class="header-wrapper">
            <div class="logo-wrap">
                <a href="#" class="hover-target"><span>Dames</span>Heerde</a>
            </div>
            <div class="nav-but-wrap">
                <div class="menu-icon hover-target">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>
        </div>
    </header>

    <div class="nav">
        <div class="nav__content">
            <ul class="nav__list">
                <li class="nav__list-item active-nav"><a href="/" class="hover-target">Home</a></li>
                <li class="nav__list-item"><a href="/overons" class="hover-target">Over ons</a></li>
                <li class="nav__list-item"><a href="/spelers" class="hover-target">Het team</a></li>
                <li class="nav__list-item"><a href="/wedstrijden" class="hover-target">Wedstrijden</a></li>
                <li class="nav__list-item"><a href="/stand" class="hover-target">Stand</a></li>
                <li class="nav__list-item"><a href="/bijonsvoetballen" class="hover-target">Bij ons voetballen</a></li>
                <li class="nav__list-item"><a href="/fotos" class="hover-target">Fotos</a></li>
                <li class="nav__list-item"><a href="/contact" class="hover-target">Contact</a></li>
                <li class="nav__list-item"><a href="https://www.instagram.com/vvheerdevr1/" class="hover-target"><i class="fab fa-instagram"></i></a></li>
                <li class="nav__list-item"><a href="https://www.facebook.com/groups/vvheerdedames/" class="hover-target"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
    </div>
    @yield('content')

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="{{asset('js/nav.js')}}"></script>


    </body>
</html>
