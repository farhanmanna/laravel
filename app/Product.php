<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code','name','price'];



    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}




