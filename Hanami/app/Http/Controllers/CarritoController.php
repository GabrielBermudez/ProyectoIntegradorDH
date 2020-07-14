<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarritoModel;
use App\UsuarioModel;
use App\PerfilModel;

class CarritoController extends Controller
{   

    public function ShowCarrito(){
        $usuario=UsuarioModel::where("id","=",$_COOKIE["id"])
        ->get();

        $productos=$usuario[0]->productosCarrito;
       
        return view("carrito",compact("productos"));

        
    }


    public function AgregarCompra($id){
       
        $productos = new CarritoModel();
        
        

        $productos->usuario_id = $_COOKIE["id"];
        $productos->producto_id = $id;
       
        #dd($productoCarrito);
        $productos->save();

        return redirect("/catalogo");

    }

    public function ConcretarCompra(){
        $usuario=UsuarioModel::where("id","=",$_COOKIE["id"])
        ->get();

        $productos=$usuario[0]->productosCarrito;
       
        foreach($productos as $producto){
            $resumen = new PerfilModel();
            $resumen->id_usuario = $_COOKIE["id"];
            $resumen->id_producto = $producto->id;
            $resumen->save();
        }

        $carritoOld = CarritoModel::where("usuario_id","=",$_COOKIE["id"])
        ->delete();
        
        return redirect("/home");

    }
}
