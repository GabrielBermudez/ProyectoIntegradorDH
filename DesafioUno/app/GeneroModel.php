<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneroModel extends Model
{
    public $table="genres";
    public $timestamps=true;
    public $guarded=[];



    public function movie(){
        return $this->hasMany("App\MovieModel","id");
    }

}
