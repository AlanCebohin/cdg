<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id', 'title','categories', 'created_time', 'created_at'];
    protected $dates = ['created_time', 'created_by'];

	public function variant()
	{
		return $this->hasMany('App\products_variants');
	}
}

