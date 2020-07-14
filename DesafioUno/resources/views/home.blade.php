
@extends('layouts.app')
@section('content')



  <section class="vip-products"> 
    <h1>Peliculas Random</h1>
    <div class="container">
      <div class="row">
     
      @foreach ($peliculasRandom as $value)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <article class="product mb-5">

            <h2 class="">
              <a href="detalle/{{$value->id}}" class="item__info-title">
                <span class="main-title">{{$value->title}}</span>
              </a>
            </h2>
            @if(Auth::user()->name=="Admin")
              <a class="btn btn-primary" href="/eliminar/{{$value->id}}" role="button">Eliminar</a>
            @endif

          </article>
        </div>
      @endforeach

      </div>
    </div>

    <h1>Peliculas Agregadas Recientemente</h1>
    <div class="container">
      <div class="row">
     
      @foreach ($peliculasRecientes as $value)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <article class="product mb-5">

            <h2 class="">
              <a href="detalle/{{$value->id}}" class="item__info-title">
                <span class="main-title">{{$value->title}}</span>
              </a>
            </h2>
            @if(Auth::user()->name=="Admin")
            <a class="btn btn-primary" href="/eliminar/{{$value->id}}" role="button">Eliminar</a>
            @endif

          </article>
        </div>
      @endforeach

      </div>
    </div>
  </section>

    @endsection