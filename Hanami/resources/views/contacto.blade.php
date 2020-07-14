@extends('layouts.app')
@section('content')

		
		

<div class="container">
		<div class="row justify-content-center">
		<div class="col-md-8">
				<h1 style=text-align:center;>¿TE AYUDAMOS?</h1>
				<img src="images/2.png" alt=" ">
			</div>
		</div>
			
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Contacto') }}</div>

                <div class="card-body">
                    <form method="POST" action="contacto">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular:') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control" name="celular" required>
                            </div>
                        </div>


						<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="correo" value="" required autofocus>
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label text-md-right">{{ __('Mensaje:') }}</label>

                            <div class="col-md-6">
								<textarea name="mensaje" class="form-control" placeholder="Mensaje..." required></textarea>
							</div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
