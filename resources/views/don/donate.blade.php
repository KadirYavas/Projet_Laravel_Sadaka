@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

<div class="text-center">
    <img src="https://img-19.ccm2.net/-6YD13OaBQiytqcy4mV2UtkuaNc=/325x/72a9c650721947feb98cd5fee565ca32/ccm-faq/9A0kYMVyJGwvgYup05C1LtCV-original-s-.png" alt="">

    <form class="m-3" action="{{route('envoiDon', $cause->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        
        <section class="container">
            
            <h1 class="text-left">Voici le prix de base pour le produit suivant: {{$cause->titre}}</h1>
            <p>Description: {{$cause->texte}}</p>
            <input disabled class="form-control @error('prix') is-invalid @enderror" type="text" name="prix" id="" value="{{$cause->prix}} €" placeholder="Veuillez saisir le prix de la cause">
            @error('prix')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="text-left">
                <h1>Veuillez choisir un montant pour votre donation</h1>
            </div>

            <input class="form-control" type="number" name="don" min="0" max="100000" id="">

        </section>
    
        <div class="text-center">
            <button class="btn btn-warning text-dark font-weight-bold m-5" type="submit">Faire un don</button>
        </div>
    </form>
</div>

@stop