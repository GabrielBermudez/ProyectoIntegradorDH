<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;

class MovieController extends Controller
{
  public function DetallePelicula($id){
    $movie=MovieModel::find($id);
    return view("detalle",compact("movie"));
  }

  public function ListadoPeliculas(){
      $movies=MovieModel::paginate(6);

      
        return view("titulo",compact("movies"));
        
  }

  public function AgregarPelicula(Request $request){

      // $reglas = [
      //     "nombre" => "string|min:3|max:50|required",
      //     "apellido" => "string|min:3|max:50|required",
      //     "usuario" => "min:5|unique:usuarios,usuario|required",
      //     "email" => "email|min:6|max:40|unique:usuarios,email|required",
      //     "contraseña" => "min:5|required",
      //     "confirmarContraseña" =>"same:contraseña|min:5|required",
      //     "telefono" => "integer|min:7|required",
      //     "celular" => "integer|min:7|required",
      //     "pais" => "string|required",
      //     "genero" => "string",
      //     "imagen" => "file"
      // ];

      // $mensajes = [
      //     "string" => "El campo :attribute debe ser un texto",
      //     "integer" => "El campo :attribute debe ser numerico",
      //     "min" => "El campo :attribute debe tener un minimo de :min",
      //     "max" => "El campo :attribute debe tener un maximo de :max",
      //     "required" => "El campo :attribute debe ser completado",
      //     "unique" => "El campo :attribute ya se encuentra registrado",
      //     "email" => "El campo :attribute debe ser de tipo email",
      //     "same" => "El campo :attribute debe ser igual a la contraseña",
      //     "file" => "El campo :attribute debe ser una imagen"
          
      // ];
     
      // $this -> validate($request, $reglas, $mensajes);

      $pelicula = new MovieModel();
      
      $pelicula->title = $request["title"];
      $pelicula->rating = $request["rating"];
      $pelicula->awards = $request["awards"];
      
      
      $pelicula->save();

      return redirect("/home");

  }

  public function EliminarPelicula($id){

    $movie=MovieModel::where("id","=",$id)->delete();
    return redirect("/home");

  }

  public function ModificarPelicula(Request $request) {
    $pelicula=MovieModel::where('title', '=', $request["title"])->first();
   
    if($pelicula->id>=1){
      
      $pelicula->title = $request["title"];
      $pelicula->rating = $request["rating"];
      $pelicula->awards = $request["awards"];

      $pelicula->save();

      return redirect("/home");
}

  }

}
