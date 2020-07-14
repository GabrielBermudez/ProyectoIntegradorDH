<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $reglas = [
            "nombre" => "string|min:3|max:50|required",
            "apellido" => "string|min:3|max:50|required",
            "usuario" => "min:5|unique:usuarios,usuario|required",
            "email" => "email|min:6|max:40|unique:usuarios,email|required",
            "contraseña" => "min:5|required",
            "confirmarContraseña" =>"same:contraseña|min:5|required",
            "telefono" => "integer|min:7|required",
            "celular" => "integer|min:7|required",
            "pais" => "string|required",
            "genero" => "string",
            "fotoRegistro" => "file"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "integer" => "El campo :attribute debe ser numerico",
            "min" => "El campo :attribute debe tener un minimo de :min",
            "max" => "El campo :attribute debe tener un maximo de :max",
            "required" => "El campo :attribute debe ser completado",
            "unique" => "El campo :attribute ya se encuentra registrado",
            "email" => "El campo :attribute debe ser de tipo email",
            "same" => "El campo :attribute debe ser igual a la contraseña",
            "file" => "Asegurese de cargar una foto"
        ];

        return Validator::make($data, $reglas,$mensajes);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {  
        validator($data);
        $request = new Request();
        $request->merge($data);
        $ruta= $request -> file("imagen")->store("public/ImagenPerfil");
        $nombreImagen = basename($ruta);
        
        return User::create([
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'usuario' => $data['usuario'],
            'email' => $data['email'],
            'contraseña' => Hash::make($data['contraseña']),
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],
            'pais' => $data['pais'],
            'genero' => $data['genero'],
            "image" => $nombreImagen
        ]);

    }
    
}
