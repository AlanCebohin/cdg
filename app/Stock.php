<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function variants()
    {
    	return $this->belongsTo('App\Variant');
    }
}
