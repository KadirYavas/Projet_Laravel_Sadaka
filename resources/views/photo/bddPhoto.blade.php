@extends('layouts/master')

@if(count($gallery) <= 4)
<div class="text-center"><a href="{{route('createGallery')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter une photo</button></a></div>
@endif

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Titre de la photo</th>
      <th>Photo</th>
      <th class="col-2">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($gallery as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->titre }}</td>
          <td><img src="{{asset('storage/'.$item->photo)}}" alt="" width="75px"></td>
          <td>
              <a href="{{route('editGallery', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              <a href="{{route('destroyGallery', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

