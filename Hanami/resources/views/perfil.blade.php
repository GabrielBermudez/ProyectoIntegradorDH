@extends('layouts.app')
@section('content')

<div class="container">
    
    <div class="row justify-content">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Perfil de Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="perfil" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center mb-4">
                          <img src="/storage/ImagenPerfil/{{$_COOKIE['imagen']}}" alt="Foto de perfil" style="width:100px; heigth:100px; borderRadius:50px;">
                        </div>
                        
                
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ $_COOKIE['usuario'] }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono:') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ $_COOKIE['telefono'] }}" required autofocus>

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
                                <input id="celular" type="text" class="form-control{{ $errors->has('celular') ? ' is-invalid' : '' }}" name="celular" value="{{ $_COOKIE['celular'] }}" required autofocus>

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
                                <select id="inputState" class="form-control" name="pais">
                                    <option selected value="{{$_COOKIE['pais']}}">Elegir...</option>
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
                                    {{ __('Modificar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Compras') }}</div>
                  <div class="card-body">
                    <ul>
                        <section class="vip-products1">
                        <div class="container">
                        <div class="row">
                        @foreach($productos as $producto)
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <article class="product mb-5">
                                <div class="photo-container">
                                    <span class="mr-4"><a href="producto/{{$producto->id}}"><img class="photo " src="/images/{{$producto->image}}" alt="Fotografia de celulares" style="width:100px; height=80px"></a></span>
                                    <span class="main-title mr-4" style="fontWeight:bold;">{{$producto->titulo}}</span>
                                    <span class="precio mr-4"  style="fontWeight:bold;">${{$producto->precio}}</span>
                           

                           
                        </article>
                    </div>
                        @endforeach
                    </section>

                    </ul>


                  </div>
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
