<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        
      <!-- pour les icônes dans l'espace admin   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


            <!-- pour les différentes catégories qui s'affichent sur la page d'accueil   -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://scriptpie.com/cubeportfolio/live-preview/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/ind.css') }}" rel="stylesheet">

        
    </head>


    <header>



<nav>
        <ul> 
                <li><a href="{{route('welcome')}}">Accueil</a></li>
                
                <li><a href="{{route('client.contact')}}">Contact</a></li>
                <li><a href="#">A propos</a></li>
                @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                                    <li><a href="{{route('admin.index')}}">Gestion</a></li>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                
                            </li>
                @endif
        </ul>
</nav>

<div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
</div>

</header>

        <main class="py-4">


            @yield('content')
            

        </main>
    </div>

@if(session()->has('confirm'))

<p>
<div class="alert alert-warning" role="alert">
{{session()->get('confirm')}}
</div>
</p>
@endif
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://scriptpie.com/cubeportfolio/live-preview/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="http://scriptpie.com/cubeportfolio/live-preview/templates/mosaic/js/main.js"></script>

