<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function profiles()
    {
    	return $this->hasMany(Profile::class);
    }
}
