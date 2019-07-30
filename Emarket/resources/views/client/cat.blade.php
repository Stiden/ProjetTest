@extends('layouts.app')
@section('content')



    <body>

<div class="containar">

        <div class="detail">
            <!--pour avoir un texte en haut de la navbar-->
        <div class="jumbotrom">
                <h1>Ecom</h1>
                <p>Nos produits alimentaires bios, à votre portée</p>
                



            <div class="row mx-5" >
                @foreach($catbio as $produit)

                            <div class="contain">
                                        <div class="card-deck col-md-4" >
                                            <div class="car">
                                                <div class="face face1">
                                                    <div class="conte">
                                                    @if($produit->img)
                                                    <img src="{{asset('storage/' . $produit->img)}}" alt="">
                                                    @endif
                                                        <h3>{{$produit->nomprod}}</h3>
                                                        <p class="card-text">{{$produit->nomcat}}</p>
                                                    </div>
                                                </div>
                                                <div class="face face2">
                                                    <div class="conte">
                                                        <p>{{$produit->detail}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-deck col-md-1" >
                                        </div>
                            </div>
                @endforeach
            </div>
        </div>
</div>
        
    </body>
</html>
@endsection