@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
@if(count($about) == 0)
<div class="text-center"><a href="{{route('createAbout')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter un texte</button></a></div>
@endif

<div class="text-center"><h1 class="text-success">Aperçu</h1></div>

<div class="container text-center row mb-5">
    

    <div class="col-md-6">

        <img src="{{asset('/images/about-us.jpg')}}" width="350px" alt="" class="img-responsive">

    </div>

    <div class="col-md-6">

        <h2 class="title-style-2">ABOUT SADAKA <span class="title-under"></span></h2>

        @foreach ($about as $item)
            <p class="text-primary">{{$item->texte}}</p>
        @endforeach
        
    </div>

</div> <!-- /.row -->

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Texte</th>
      <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($about as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->texte }}</td>
          <td>
              <a href="{{route('editAbout', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              @if(count($about) == 1)
              <a href="{{route('destroyAbout', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
              @endif
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@stop