@extends('layouts.app')


<body>

    
    <div class="container">

    <div class="services">
            <i class="fas fa-cogs"></i>
        <h1>Espace administrateur</h1>
</div>

        <div class="row">



            <div class="col-md-2">
                <form class="okok" action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        
                        <input type="text" class="form-controlcat" placeholder="nom categorie" name="nomcat">
                    </div>
                    <button type="submit" class="btn btn-primary"> Ajout catégorie </button>
                    </form>
            </div>   

            <div class="col-md-2">
            </div>


            <div class="col-md-6">
               
                <form class="okok" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        
                        <input type="text" class="form-control" placeholder="nom produit.." name="nomprod" required>
                    </div>

                        <div class="form-group">
                            <SELECT class="form-control" name="cat_id" size="1">
                            @foreach ($categories as $categorie) 
                            <option value="{{$categorie->id}}">{{$categorie->nomcat}}</option>
                            @endforeach
                            </SELECT>
                        </div>


                   
                    <div class="form-group">
                    <textarea class="form-control" placeholder="détails produit.." name="detail" rows="3" cols="5" required></textarea>
                    </div>

                <div class="form-group">

                <input type="file" name="img">

                </div>

                    <button type="submit" class="btn btn-primary"> Ajout produit </button>
                </form>
            </div>     
            
        </div>
    </div>
    
</body>

</html>

