@extends('layouts.app')

@section('content')

     
<div class="container">

<div class="services">
            <i class="fas fa-cogs"></i>
        <h1>Espace administrateur</h1>
</div>
<br>
            <div class="btnaj">
                <button ><a href="{{ route('admin.create') }}">AJOUTER <br> catégorie/produit</a></button>
            </div>

        <div class="row">             

                <div class="col-md-3">
                    <div class="panel-heading">Gestion des Catégories</div>

                        <table class="table">
                            <tr>
                                <td align="center"><b>Catégories</b></td>
                                <td align="center"><b>Gérer</b></td>
                            </tr>

                            @foreach($catbio as $categorie)
                            <tr>
                                <td align="center">{{$categorie->nomcat}}</td>
                                <td>
                                <a href="{{route('client.edit',['edit'=>$categorie->id])}}"class="btn btn-success">Modif</button>
                                </td>
                                <td>
                                    <form action="{{route('client.destroy',['categorie'=> $categorie->id])}}"
                                    method="POST" onsubmit="return confirm('Voulez-vous vraiment suppr ?');">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Suppr</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </table>

                </div>

    
<div class="col-md-2"></div>


                <div class="col-md-7">
                    
                    
                    <div class="panel-heading">Gestion des produits</div>
                        

                            <table class="table">
                                <tr>
                                    <td align="center"><b>Produits</b></td>
                                    <td align="center"><b>Catégories</b></td>
                                    <td align="center"><b>Détails</b></td>
                                    <td align="center"><b>Gérer</b></td>
                                </tr>
                                @foreach($prodbio as $produit)
                                    
                                    <tr>
                                        <td align="center">{{$produit->nomprod}}</td>
                                        <td align="center">{{$produit->nomcat}}</td>
                                        <td align="center">{{$produit->detail}}</td>
                                        <td>
                                        
                                            <a href="{{route('admin.edit',['edit'=>$produit->id])}}"class="btn btn-success">Modif</button>
                                        
                                        </td>
                                        <td>
                                        <form action="{{route('admin.destroy',['produit'=> $produit->id])}}"
                                        method="POST" onsubmit="return confirm('Voulez-vous vraiment suppr ?');">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Suppr</button>
                                        </form>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </table>
                    </div>
                

            @foreach($prodbio as $produit)
            <img src="{{asset('storage/'.$produit->img" alt="">
            @endforeach
        </div>
    </div>

@endsection