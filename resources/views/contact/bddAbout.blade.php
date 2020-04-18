@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content')
@if(count($contact) == 0)
<div class="text-center"><a href="{{route('createContact')}}"><button class="btn btn-outline-dark btn-lg mb-4">Ajouter un texte</button></a></div>
@endif

<div class="text-center"><h1 class="text-success">Aperçu</h1></div>

<div class="footer-main">
    <div class="container">
<div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
                                
                                @foreach ($contact as $item)
                                    <p>{{$item->texte}}</p>
                                @endforeach

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    @foreach ($tweet as $item)
                                <li class="tweet"> 

                                  {{$item->texte}} 

                              </li>
                                @endforeach

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="{{route('message')}}" method="POST">
                                        @csrf
                                          <div class="form-group">
                                              <input disabled type="text" name="name" class="form-control" placeholder="Name" required>
                                          </div>
      
                                           <div class="form-group">
                                              <input disabled type="email" name="email" class="form-control" placeholder="E-mail" required>
                                          </div>
      
                                          <div class="form-group">
                                              <textarea name="message" disabled class="form-control" placeholder="Message" required></textarea>
                                          </div>
      
                                          
                                      </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                </div>
                </div>

<table class="table table-bordered table-hover shadow">
  <thead>
  <tr>
      <th>ID</th>
      <th>Texte</th>
      <th>Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach($contact as $item)
      <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->texte }}</td>
          <td>
              <a href="{{route('editContact', $item->id)}}"><button class="btn btn-outline-info m-1">Modifier</button></a>
              @if(count($contact) == 0)
              <a href="{{route('destroyContact', $item->id)}}"><button class="btn btn-outline-danger">Supprimer</button></a>
              @endif
          </td>
      </tr>
  @endforeach
  </tbody>
</table>

@stop
