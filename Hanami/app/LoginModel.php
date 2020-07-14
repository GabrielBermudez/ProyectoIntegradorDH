<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    public $table="usuarios";
    public $timestamps=false;
    public $guarded=[];
}
