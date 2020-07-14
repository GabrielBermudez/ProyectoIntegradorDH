<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productosModel;

class productosController extends Controller {

    public function showFavorito(){
        $productos=productosModel::where("rating",">","7.1")
        ->take(6)
        ->orderBy("titulo")
        ->get();
        return view("home",compact("productos"));
    }


    public function showCatalogo(){
        $productos=productosModel::paginate(6);
       
        return view("catalogo",compact("productos"));
    }


    public function showProducto($id){
        $producto=productosModel::find($id);
        return view("producto",compact("producto"));
    }


   
}
