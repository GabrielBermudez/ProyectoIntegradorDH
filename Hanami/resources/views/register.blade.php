
@if(isset($_COOKIE["id"]))
    <script>window.location.href = "/home";</script>
@endif


@extends('layouts.app')
@section('content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="registrarse" enctype="multipart/form-data">
                        @csrf   
  
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ old('usuario') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="contraseña" type="password" class="form-control{{ $errors->has('contraseña') ? ' is-invalid' : '' }}" name="contraseña" required>

                                @if ($errors->has('contraseña'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contraseña') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmarContraseña" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="confirmarContraseña" type="password" class="form-control" name="confirmarContraseña" required>
                            </div>
                        </div>


                       
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono:') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular:') }}</label>

                            <div class="col-md-6">
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ old('celular') }}" required autofocus>

                                @if ($errors->has('celular'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="inputState" class="col-md-4 col-form-label text-md-right">{{ __('Pais:') }}</label>

                            <div class="col-md-6">
                                <select id="inputState" class="form-control" name="pais" value="{{old('pais')}}">
                                    <option selected>Elegir...</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Paraguay">Paraguay</option> 
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                        <label for="inputState" class="col-md-4 col-form-label text-md-right">{{ __('Genero:') }}</label>
                            
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="gridRadios1" value="Hombre" checked>
                                    <label class="form-check-label" for="gridRadios1">Hombre</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="Mujer">
                                    <label class="form-check-label" for="gridRadios2">Mujer</label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genero" id="gridRadios2" value="Otro">
                                    <label class="form-check-label" for="gridRadios3">Otro</label>
                                </div>
                            </div>
                       
                        </div>

                        <div class="form-group row">
                            <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                                <input id="imagen" type="file" class="form-control{{ $errors->has('imagen') ? ' is-invalid' : '' }}" name="imagen" value="{{ old('imagen') }}" required autofocus>

                                @if ($errors->has('imagen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
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
