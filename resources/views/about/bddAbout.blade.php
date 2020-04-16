@extends('layouts/master')

@if(count($about) == 0)
<div class="text-center"><a href="{{route('createAbout')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter un texte</button></a></div>
@endif

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Texte</th>
      <th class="col-2">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($about as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->texte }}</td>
          <td>
              <a href="{{route('editAbout', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              @if(count($about) == 0)
              <a href="{{route('destroyAbout', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
              @endif
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

