
@extends('layouts.app')

@section('content')



  <section class="vip-products"> 
    <h1>Mas destacados</h1>
    <div class="container">
      <div class="row">
      @foreach ($productos as $value)
        <div class="col-lg-4 col-md-6 col-sm-12" >
          <article class="product mb-5" style="backgroundColor:#FAF7F6;">
            
            <div class="photo-container d-flex justify-content-center">
              <a href="producto/{{$value->id}}"><img class="photo " src="/images/{{$value->image}}"  alt="Fotografia de plantas"></a>
            </div>

            <h2 class="">
              <a href="" class="item__info-title d-flex justify-content-center">
                <span class="main-title">{{$value->titulo}}</span>
              </a>
            </h2>

            <div class="precioClass mb-2 d-flex justify-content-center">
              <span class="simboloPrecio" style="fontWeight:bold;">$ {{$value->precio}}</span>
              <span class="precio"></span>
            </div>

            <div class="d-flex justify-content-center mb-3">
              <button type="" class="btn btn-primary">Comprar</button>
            </div>

          </article>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  

  <footer>

<p id="infoHome"><br> Tel:2614568765 <br><br> Cel:+54 9 2614568723 <br><br> Direccion:
Avenida de, Acceso Este 3280, M5500 Mendoza</p>
<iframe class="ml-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6127.880960222142!2d-68.80210067397549!3d-32.90241998258057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e0ea0bc78593d%3A0x61932a53d62932c7!2sMendoza%20Plaza%20Shopping!5e0!3m2!1ses!2sar!4v1580176708242!5m2!1ses!2sar" width="200" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<a href="https://www.facebook.com/"> <img class="logos" src="images/facebook.png" alt="Facebook"> </a>
<a href="https://www.instagram.com/"> <img class="logos" src="images/instagram.png" alt="Instagram"> </a>
<a href="https://www.twitter.com/"> <img class="logos" src="images/twitter.png" alt="Twitter"> </a> 
<a href="https://wa.me/5492616145079"> <img class="logos" src="images/whatsapp.png" alt="Whatsapp" > </a>
<br> <br>
<nav id="barraNavHome"> <!-- Barra de navegacion       -->
    <a class="barraNav" href="home">Home |</a>
    <a class="barraNav" href="perfil">Perfil de Usuario |</a>
    <a class="barraNav" href="catalogo">Catalogo |</a>
    <a class="barraNav" href="contacto">Contacto |</a>
    <a class="barraNav" href="#">F.A.Q</a>
</nav>
</footer>


 
@endsection


 