@extends('layouts.app')
@section('content')

<section class="vip-products">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">


                    <span>
                        <h1>{{$producto->titulo}}</h1>
                    </span>
                    <div class="photo-container">
                        <img src="/images/{{$producto->image}}" alt="Imagen de {{$producto->tipo_producto}}">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mt-5">{{$producto->descripcion}}</p>
                    <div class="precioClass">
                        <span class="simboloPrecio">$</span>
                        <span class="precio">{{$producto->precio}}</span>
                    </div>
                    <br>
                    <a class="btn btn-primary" href="/catalogo" role="button">Volver</a>
                    <a class="btn btn-primary" href="/carrito/{{$producto->id}}" role="button">Comprar</a>

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
    <a href="https://wa.me/5492616145079"> <img class="logos" src="images/whatsapp.png" alt="Whatsapp"> </a>
    <br> <br>
    <nav id="barraNavHome">
        <!-- Barra de navegacion       -->
        <a class="barraNav" href="home">Home |</a>
        <a class="barraNav" href="perfil">Perfil de Usuario |</a>
        <a class="barraNav" href="catalogo">Catalogo |</a>
        <a class="barraNav" href="contacto">Contacto |</a>
        <a class="barraNav" href="#">F.A.Q</a>
    </nav>
</footer>

@endsection