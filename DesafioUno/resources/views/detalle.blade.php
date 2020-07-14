
@extends('layouts.app')
@section('content')


    <section class="vip-products"> 
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <span><h1>Titulo: {{$movie->title}}</h1></span>   
                        <span><h2>Rating: {{$movie->rating}}</h2></span>
                        <span><h3>Premios: {{$movie->awards}}</h3></span>
                        <p>Actores:</p>
                        <ul>
                            @foreach($movie->actor as $actor)
                                <li>
                                {{$actor->first_name . " " . $actor->last_name}}
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>     
            </div>
            @if(Auth::user()->name=="Admin")
            <a class="btn btn-primary" href="/eliminar/{{$movie->id}}" role="button">Eliminar</a>
            @endif
            <a class="btn btn-primary" href="/home" role="button">Volver</a>
        </div>
    </section>
   
@endsection