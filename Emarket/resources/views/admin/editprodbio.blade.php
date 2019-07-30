@extends('layouts.app')

@section('content')

    <body>

<div class="container">
    <!-- value="{{old('nomprod') ?? $produit->nomprod}}" -->
<form action="{{route('client.update',['edit'=>$edit->id])}}" method="POST" enctype="multipart/form-data" class="okok">
{{ method_field('PATCH') }}
@csrf
    <div class="form-group">
   
        <input type="text" class="form-control" placeholder="{{$edit->nomprod}}" name="nomprod">
    </div>

    <div class="form-group">
        <SELECT class="form-control" name="cat_id" size="1">
            @foreach ($categories as $categorie) 
            <option value="cat_id">{{$categorie->nomcat}}</option>
            @endforeach
        </SELECT>
    </div>


    <div class="form-group">
    <textarea class="form-control" placeholder="{{$edit->detail}}" name="detail" rows="5" cols="20"></textarea>
    </div>

<div class="form-group">

<input type="file" name="img">

</div>

    <button type="submit" class="btn btn-primary"> Enregistrer </button>
</form>

</div>


 </body>
 </html>
 @endsection