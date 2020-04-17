@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

@if(count($cause) == 3)
<div class="text-center"><a href="{{route('createCause')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter une cause</button></a></div>
@endif

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Titre de la cause</th>
      <th>Texte de la cause</th>
      <th>Prix de la cause</th>
      <th>Photo de la cause</th>
      <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($cause as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->titre }}</td>
          <td>{{ $item->texte }}</td>
          <td>{{ $item->prix }}</td>
          <td><img src="{{asset('images/'.$item->image)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('editCause', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyCause', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@stop