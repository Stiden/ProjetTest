<html>

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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrap"></script>


        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/add.css') }}" rel="stylesheet">


    </head>

<!-- </header>
    <div class="ok">

pour avoir un texte en haut de la navbar
<div class="jumbotrom">
    <font color=#000000><h1>Ecom</h1></font>
    <p>Nos produits alimentaires bios, à votre portée</p>
    <p>
        <form class="form-inline my-2 my-lg-0" action="/search" method="get">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </p>
</div>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">

button qui va permettre une
réorganisation lors de la réduction de la fenêtre
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collaspe_target">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><font color=#ffffff>Home</font></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toogle="dropdown" data-target="dropdown-target" href="#">
                    <font color=#ffffff>Catégories</font>
                        <span class="caret"></span>
                    </a>

            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

            

            
                </form>
            </li>
        </ul>
    </div>
</nav>
</div>
</header> -->





<header>



                <nav>
                        <ul> 
                                <li><a href="/produits/welcome">Accueil</a></li>
                                <li><a href="#" class="active">Produits</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">A propos</a></li>
                                @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            

                                
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
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





<body>
        <div class="container">
               
            <form class="okok" action="/produits" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    
                    <input type="text" class="form-control" placeholder="nom du produit.." name="nomprod">
                </div>

                    <div class="form-group">
                        <SELECT class="form-control" name="categorie" size="1">
                        <OPTION>Céréales
                        <OPTION>Fruits
                        <OPTION>Légumes
                        <OPTION>Oléagineux
                        <OPTION>Protéagineux
                        </SELECT>
                    </div>


                <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="catégorie.." name="categorie">
                </div> -->
                <div class="form-group">
                <textarea class="form-control" placeholder="détails du produit.." name="detail" rows="3" cols="10"></textarea>
                </div>

            <div class="form-group">

            <input type="file" name="img">

            </div>

                <button type="submit" class="btn btn-primary"> Ajouter le produit </button>
            </form>

            </div>


</body>

</html>