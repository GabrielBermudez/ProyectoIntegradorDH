<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    public $table="usuarios";
    public $timestamps=false;
    public $guarded=[];


    public function productos() {
        return $this->belongsToMany("App\productosModel","resumen","id_usuario","id_producto");
    }

    public function productosCarrito() {
        return $this->belongsToMany("App\productosModel","carrito","usuario_id","producto_id");
    }
}


