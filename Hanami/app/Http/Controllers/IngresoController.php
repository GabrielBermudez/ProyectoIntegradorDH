<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\LoginModel;

class IngresoController extends Controller
{
    public function IngresoUsuario(Request $request, SessionManager $sessionManager){

        $usuario=LoginModel::where("email","=",$request["email"])
        ->where("contraseña","=",$request["contraseña"])
        ->get();
        
        if(isset($usuario[0])){
            setcookie("id",$usuario[0]["id"]);
            setcookie("nombre",$usuario[0]["nombre"]);
            setcookie("apellido",$usuario[0]["apellido"]);
            setcookie("usuario",$usuario[0]["usuario"]);
            setcookie("email",$usuario[0]["email"]);
            setcookie("contraseña",$usuario[0]["contraseña"]);
            setcookie("telefono",$usuario[0]["telefono"]);
            setcookie("celular",$usuario[0]["celular"]);
            setcookie("pais",$usuario[0]["pais"]);
            setcookie("genero",$usuario[0]["genero"]);
            setcookie("imagen",$usuario[0]["image"]);

            return redirect("/home");
        }else{
            $sessionManager->flash('mensaje', 'Los datos ingresados son incorrectos');

            return view('login');

        }
 
        

       

    }

    public function Logout(){


        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
        
        return redirect("/home");

    }
}
