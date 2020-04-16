@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form class="m-3" action="{{route('envoiContact')}}" method="post">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'ajout d'un texte</h1>
    </div>
    <section class="container">
        <input value="@if($errors->first('texte'))@else{{old('texte')}}@endif" class="m-3 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" placeholder="Veuillez saisir le texte">
        @error('texte')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>
    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Ajoutez le texte</button>
    </div>
</form>

@stop
