<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function proyectos()
    {
    	return $this->hasMany('App\Proyecto');
    }
}
