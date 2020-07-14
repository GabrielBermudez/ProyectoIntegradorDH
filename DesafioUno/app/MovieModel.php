<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    public $table="movies";
    public $timestamps=true;
    public $guarded=[];

    public function actor() {
        return $this->belongsToMany("App\ActorModel","actor_movie","movie_id","actor_id");
    }

    public function genero(){
        return $this->belongsTo("App\GeneroModel","genre_id");
    }

}
