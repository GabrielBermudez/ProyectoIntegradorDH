@extends('layouts.app')
@section('content')

<nav class="navbar">
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</nav>

  <section class="vip-products"> 
    <h1>Listado de Peliculas</h1>
    <div class="container">
      <div class="row">
     
      @foreach ($movies as $value)
        <div class="col-lg-4 col-md-6 col-sm-12">
          <article class="product mb-5">

            <h2 class="">
              <a href="detalle/{{$value->id}}" class="item__info-title">
                <span class="main-title">{{$value->title}}</span>
              </a>

              
            </h2>
            @if($value->genero)
            <p>Genero: {{$value->genero->name}}</p>
            @else
            <p>Genero: No tiene</p>
            @endif

            @if(Auth::user()->name=="Admin")
              <a class="btn btn-primary" href="/eliminar/{{$value->id}}" role="button">Eliminar</a>
            @endif
          </article>
        </div>
      @endforeach

      </div>

      <div class="d-flex justify-content-center">{{$movies->links()}}</div>
    </div>
  </section>


    @endsection