@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form class="m-3" action="{{route('envoiGallery')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'ajout d'une photo</h1>
    </div>
    <section class="container">
        <input value="@if($errors->first('titre'))@else{{old('titre')}}@endif" class="m-3 form-control @error('titre') is-invalid @enderror" type="text" name="titre" id="" placeholder="Veuillez saisir le titre de l'image">
        @error('titre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input value="@if($errors->first('photo'))@else{{old('photo')}}@endif" class="m-3 form-control @error('photo') is-invalid @enderror" type="file" name="photo" id="" placeholder="Veuillez choisir l'image">
        @error('photo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>
    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez la photo</button>
    </div>
</form>

@stop