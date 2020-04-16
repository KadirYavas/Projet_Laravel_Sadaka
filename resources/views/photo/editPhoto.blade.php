@extends('layouts/master')

<form class="m-3" action="{{route('updateGallery', $gallery->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'edit</h1>
    </div>
    <section class="container">
        <input class="m-3 form-control @error('titre') is-invalid @enderror" type="text" name="titre" id="" value="{{$gallery->titre}}" placeholder="Veuillez saisir le titre de la photo">
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <img src="{{asset('storage/'.$gallery->photo)}}" width="150px" alt="">
        <input class="m-3 form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="" value="{{$gallery->photo}}" placeholder="Veuillez sélectionner l'image'">
        @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>

    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Update la photo</button>
    </div>
</form>

