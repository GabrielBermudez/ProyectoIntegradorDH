<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorModel extends Model
{
    public $table="actors";
    public $timestamps=true;
    public $guarded=[];


    public function movie() {
        return $this->belongsToMany("App\MovieModel","actor_movie","actor_id","movie_id");
    }
}
