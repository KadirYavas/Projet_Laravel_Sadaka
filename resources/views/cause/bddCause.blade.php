@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')

@if(count($cause) == 3)
<div class="text-center"><a href="{{route('createCause')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter une cause</button></a></div>
@endif


<div class="text-center"><h1 class="text-success">Aperçu</h1></div>

<div class="container mb-5">

    <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

    <div class="row">

    
        @foreach ($cause as $item)
        <div class="col-md-3 col-sm-6">

          <div class="cause">

              <img src="{{asset('images/'.$item->image)}}" height="200px" alt="" class="cause-img">

              <div class="progress cause-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                  {{$item->prix}}
                </div>
              </div>

              <h4 class="cause-title"><a href="#">{{$item->titre}} </a></h4>
              <div class="cause-details">
                  <p>{{$item->texte}}</p>
              </div>

              <div class="btn-holder text-center">

                <a href="{{route('don', $item->id)}}" class="btn btn-primary"> DONATE NOW</a>
                
              </div>

              

          </div> <!-- /.cause -->
          
      </div>
        @endforeach

            
                
            </div>


    </div>

 </div>

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