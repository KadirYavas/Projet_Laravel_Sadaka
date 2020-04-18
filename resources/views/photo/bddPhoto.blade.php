@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

@if(count($gallery) == 3)
<div class="text-center"><a href="{{route('createGallery')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter une photo</button></a></div>
@endif


<div class="container gallery fadeIn animated mb-5">
    <div class="text-center"><h1 class="text-success">Aperçu</h1></div>
<div class="row">	
                    
    @foreach ($gallery as $item)
    <a href="{{asset('images/'.$item->photo)}}" class="col-md-3 col-sm-4 gallery-item lightbox">

        <img src="{{('images/'.$item->photo)}}" height="200px" width="150px" alt="">

        <span class="on-hover">
            <span class="hover-caption">{{$item->titre}}</span>
        </span>

    </a>
    @endforeach

</div>
</div>

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Titre de la photo</th>
      <th>Photo</th>
      <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($gallery as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->titre }}</td>
          <td><img src="{{asset('images/'.$item->photo)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('editGallery', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyGallery', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@stop