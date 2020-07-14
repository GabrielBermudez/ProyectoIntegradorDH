<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\UsuarioModel;


class PerfilController extends Controller
{
    public function showCompras(){
        $usuario=UsuarioModel::where("id","=",$_COOKIE["id"])
        ->get();
        $productos=$usuario[0]->productos;
        return view("perfil",compact("productos"));
    }

    public function ModificarDatos(Request $request) {
        $usuario=UsuarioModel::where('id', '=', $_COOKIE["id"])->first();
       
        if($usuario->id>=1){
          $reglas = [
            
            "usuario" => "min:5|unique:usuarios,usuario|required",
            "telefono" => "integer|min:7|required",
            "celular" => "integer|min:7|required",
            "pais" => "string|required",
            "imagen" => "file"
        ];

        $mensajes = [
            "string" => "El campo debe ser un texto",
            "integer" => "El campo debe ser numerico",
            "min" => "El campo debe tener un minimo de :min",
            "max" => "El campo debe tener un maximo de :max",
            "required" => "El campo debe ser completado",
            "unique" => "El campo ya se encuentra registrado",
            "email" => "El campo debe ser de tipo email",
            "same" => "El campo debe ser igual a la contraseña",
            "file" => "El campo debe ser una imagen" 
        ];
       
        $this -> validate($request, $reglas, $mensajes);

    
        $ruta= $request -> file("imagen")->store("public/ImagenPerfil");
        $nombreImagen = basename($ruta);
        
        

        
        $usuario->usuario = $request["usuario"];
        $usuario->telefono = $request["telefono"];
        $usuario->celular = $request["celular"];
        $usuario->pais = $request["pais"];
        
        $usuario->image = $nombreImagen;
        
        $usuario->save();
        


        setcookie("usuario",$usuario->usuario);
        setcookie("telefono",$usuario->telefono);
        setcookie("celular",$usuario->celular);
        setcookie("pais",$usuario->pais);
        setcookie("imagen",$usuario->image);

        return redirect("/home");
    }

}
}
