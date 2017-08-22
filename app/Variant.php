<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    public function products()
    {
    	return $this->belongsTo('App\Product');
    }
}
