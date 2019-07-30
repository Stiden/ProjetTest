<html>
    <head>


    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- pour les icônes dans l'espac admine   -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
        <title>Emarket</title>   
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet">         
    </head>


    <body>
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
            






        
        <div class="contact-title">
        <h1>Hey,</h1>
            <h2>Que pouvons-nous faire pour vous ?</h2>
        </div>

        <div class="contact-form">
            <form id="contact-form" method="post" action="devis.php">              
                <input name="name" type="text" class="form-contro" placeholder="Votre nom" required>
                <br>
                <input name="email" type="email" class="form-contro" placeholder="Votre mail" required> <br>       

                <textarea name="message" class="form-contro" placeholder="Message" row="10" required></textarea><br>       
 
                <input type="submit" class="form-contro submit" value="SOUMETTRE">
            </form>              
        </div>
        
    </body>

</html>