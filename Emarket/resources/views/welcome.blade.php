@extends('layouts.app')
@section('content')



<div class="containar">

<section>

    <div class=box0>

                        <div class="detail">
                            <!--pour avoir un texte en haut de la navbar-->
                            <div class="jumbotrom">
                                <h1>Emarket</h1>
                                <p>Nos produits alimentaires bios, à votre portée !</p>
                            </div>

                            <p>
                                <form class="form-inline mx-5 my-2 my-lg-0" action="/search" method="get">
                                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </p>
                        </div>

                    
    </div>

</section>
      


<section>

            <div id="js-filters-mosaic-flat" class=cbp-l-filters-alignCenter>
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item cbp-filter-style">
                            @foreach($catbio as $categorie)
                            <a href="{{route('client.showcat',['catbio'=>$categorie->id])}}" class="btn">{{$categorie->nomcat}}</a>
                            @endforeach
                    <div id="cbp-filter-counter"></div>
                    </div> 
            </div>

        <div class="row mx-5" >
        @foreach($prodbio as $produit)


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
                    

        @endforeach
        </div>
        </div>
</section>

    

@endsection
