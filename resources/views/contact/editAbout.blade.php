@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
<form class="m-3" action="{{route('updateContact', $contact->id)}}" method="post">
    @csrf
    <div class="text-center">
        <h1>Formulaire d'edit</h1>
    </div>
    <section class="container">
        <textarea class="m-3 form-control @error('texte') is-invalid @enderror" type="text" name="texte" id="" rows="10" cols="50" placeholder="Veuillez saisir le texte">{{$contact->texte}}</textarea>
        @error('texte')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </section>

    <div class="text-center">
        <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Update le texte</button>
    </div>
</form>


@stop