@extends('layouts.app')

@section('content')

    <body>

<div class="container">
<form action="{{route('admin.update',['edit'=>$edit->id])}}" method="POST" enctype="multipart/form-data">
{{ method_field('PATCH') }}
@csrf
    <div class="form-group">
   
        <input type="text" class="form-control" placeholder="{{$edit->nomcat}}" name="nomcat">
    </div>

    <button type="submit" class="btn btn-primary"> Enregistrer </button>
</form>

</div>


 </body>
 </html>
 @endsection