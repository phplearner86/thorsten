<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['name', 'color', 'displacement', 'details', 'model', 'sold','category_id'];

    protected $baseDir = 'images/cars';
    
    protected $with = ['category'];


    protected static function boot()
    {
    	parent::boot();

    	static::observe(\App\Observers\CarObserver::class);
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }

    public function path($name)
    {
        return route('admin.cars.' .$name, $this->slug);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

    public function addPhoto($filename)
    {
        $this->photos()->create([
            'path' => $this->baseDir. '/' .$filename,
        ]);
    }

    public static function fromForm($input)
    {
        $file = $input;
        $filename = time(). '-' .$file->getClientOriginalName(); 
    }

}
