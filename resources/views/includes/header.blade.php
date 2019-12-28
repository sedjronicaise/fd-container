<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>fd-containers</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/fdclogo.PNG') }}">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
     <!-- animate CSS -->
     <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
     <!-- owl carousel CSS -->
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
     <!-- themify CSS -->
     <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
     <!-- flaticon CSS -->
     <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
     <!-- swiper CSS -->
     <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
     <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
     <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    
     <!-- style CSS -->
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('img/fdclogo.png') }}" class="rounded" height="50" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>
    
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active_color" href="/">{{ trans('app.Accueil') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ trans('app.Nos_conteneurs') }}
                                    </a>
                                   
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/nos-gammes-de-conteneur"> Conteneurs maritimes</a>
                                        <a class="dropdown-item" href="/nos-gammes-de-conteneur">Conteneurs frigorifiques</a>
                                        <a class="dropdown-item" href="/nos-gammes-de-conteneur">Conteneurs de stockages</a>
                                        <a class="dropdown-item" href="/nos-gammes-de-conteneur">Conteneurs standards</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/a-propos-de-fast-delivery-containers">{{ trans('app.A_propos') }}</a>
                                </li>
                        
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">{{ trans('app.Contact') }}</a>
                                </li>
                                 <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ml-auto">
                                    <!-- Authentication Links -->
                                    @php $locale = session()->get('locale'); @endphp
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                @switch($locale)
                                                    @case('fr')
                                                    <img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French
                                                    @break
                                                    @case('ge')
                                                    <img src="{{asset('img/ge.jpg')}}" width="30px" height="20x"> German
                                                    @break
                                                    @case('es')
                                                    <img src="{{asset('img/es.jpg')}}" width="30px" height="20x"> Spanish
                                                    @break
                                                    @default
                                                    <img src="{{asset('img/us.jpg')}}" width="30px" height="20x"> English
                                                @endswitch
                                                <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.jpg')}}" width="30px" height="20x"> English</a>
                                                <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}" width="30px" height="20x"> French</a>
                                                <a class="dropdown-item" href="lang/ge"><img src="{{asset('img/ge.jpg')}}" width="30px" height="20x"> German</a>
                                                <a class="dropdown-item" href="lang/es"><img src="{{asset('img/es.jpg')}}" width="30px" height="20x"> Spanish</a>
                                            </div>
                                        </li>
                                </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
    </header>