@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form class="m-3" action="{{route('envoiCause')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'ajout d'une cause</h1>
    </div>
    <section class="container">
        <input value="@if($errors->first('titre'))@else{{old('titre')}}@endif" class="m-3 form-control @error('titre') is-invalid @enderror" type="text" name="titre" id="" placeholder="Veuillez saisir le titre de la cause">
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input value="@if($errors->first('texte'))@else{{old('texte')}}@endif" class="m-3 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" placeholder="Veuillez saisir le texte de la cause">
        @error('texte')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input value="@if($errors->first('prix'))@else{{old('prix')}}@endif" class="m-3 form-control @error('prix') is-invalid @enderror" type="text" name="prix" id="" placeholder="Veuillez saisir le prix de la cause">
        @error('prix')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input value="@if($errors->first('image'))@else{{old('image')}}@endif" class="m-3 form-control @error('image') is-invalid @enderror" type="file" name="image" id="" placeholder="Veuillez choisir l'image">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>
    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez la photo</button>
    </div>
</form>

@stop