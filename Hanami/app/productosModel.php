<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productosModel extends Model
{
    public $table="productos";
    public $timestamps=false;
    public $guarded=[];


public function usuarios() {
    return $this->belongsToMany("App\UsuarioModel","resumen","id_producto","id_usuario");
}

public function usuariosCarrito() {
    return $this->belongsToMany("App\UsuarioModel","carrito","producto_id","usuario_id");
}


}