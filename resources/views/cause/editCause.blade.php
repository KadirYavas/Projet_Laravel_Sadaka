@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<form class="m-3" action="{{route('updateCause', $cause->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'edit</h1>
    </div>
    <section class="container">
        <input class="m-3 form-control @error('titre') is-invalid @enderror" type="text" name="titre" id="" value="{{$cause->titre}}" placeholder="Veuillez saisir le titre de la cause">
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="m-3 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" value="{{$cause->texte}}" placeholder="Veuillez saisir le texte de la cause">
        @error('texte')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input class="m-3 form-control @error('prix') is-invalid @enderror" type="text" name="prix" id="" value="{{$cause->prix}}" placeholder="Veuillez saisir le prix de la cause">
        @error('prix')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <img src="{{asset('storage/'.$cause->image)}}" width="150px" alt="">
        <input class="m-3 form-control @error('image') is-invalid @enderror" type="file" name="image" id="" value="{{$cause->image}}" placeholder="Veuillez sélectionner l'image'">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>

    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Update la cause</button>
    </div>
</form>

@stop