<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroModel;

class RegistroController extends Controller
{
    public function RegistrarUsuario(Request $request){

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
            "imagen" => "file"
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
            "file" => "El campo :attribute debe ser una imagen"
            
        ];
       
        $this -> validate($request, $reglas, $mensajes);

        $usuario = new RegistroModel();
        
        $ruta= $request -> file("imagen")->store("public/ImagenPerfil");
        $nombreImagen = basename($ruta);
        
        

        $usuario->nombre = $request["nombre"];
        $usuario->apellido = $request["apellido"];
        $usuario->usuario = $request["usuario"];
        $usuario->email = $request["email"];
        $usuario->contraseña = $request["contraseña"];
        $usuario->telefono = $request["telefono"];
        $usuario->celular = $request["celular"];
        $usuario->pais = $request["pais"];
        $usuario->genero = $request["genero"];
        $usuario->image = $nombreImagen;
        #dd($usuario);
        $usuario->save();

        return redirect("/home");
        
    }
}



