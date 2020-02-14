<!DOCTYPE html>
<html>
    <head>
        <title>Dames 1</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body>

    <nav class="menu">
        <span></span>
        <ol>
            <li class="menu-item"><a href="#0">Home</a></li>
            <li class="menu-item"><a href="#0">Over ons</a></li>
            <li class="menu-item">
                <a href="#0">Team
                    <svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 18 18">
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="10" y1="9" x2="17" y2="9"/>
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="9" y1="9" x2="9" y2="1"/>
                        <g id="lineGroup_1">
                            <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="1" y1="9" x2="8" y2="9"/>
                            <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="9" y1="17" x2="9" y2="9" />
                        </g>
                    </svg>
                </a>
                <ol class="sub-menu">
                    <li class="sub-menu-item"><a href="#0">Spelers</a></li>
                    <li class="sub-menu-item"><a href="#0">Wedstrijden</a></li>
                    <li class="sub-menu-item"><a href="#0">Stand</a></li>
                </ol>
            </li>
            <li class="menu-item">
                <a href="#0">Overig
                    <svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 18 18">
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="10" y1="9" x2="17" y2="9"/>
                        <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="9" y1="9" x2="9" y2="1"/>
                        <g id="lineGroup_2">
                            <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="1" y1="9" x2="8" y2="9"/>
                            <line fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" x1="9" y1="17" x2="9" y2="9"/>
                        </g>
                    </svg>
                </a>
                <ol class="sub-menu">
                    <li class="sub-menu-item"><a href="#0">Verdere info</a></li>
                    <li class="sub-menu-item"><a href="#0">Bij ons voetballen</a></li>
                </ol>
            </li>
            <li class="menu-item"><a href="#0">Contact</a></li>
        </ol>
    </nav>

    <img src="{{asset('img/vvh.png')}}" style="max-width: 50px; margin-left: 1.5%; margin-top: -5.5%;">

    @yield('content')

    <script src="{{asset('js/nav.js')}}"></script>

    </body>
</html>
