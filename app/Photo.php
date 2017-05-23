<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path', 'main'];

    protected $with = ['car'];

    public function car()
    {
    	return $this->belongsTo(Car::class);
    }

    
}
