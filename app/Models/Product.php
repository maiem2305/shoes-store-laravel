<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'gender', 'price', 'image', 'category_id'
    ];
    
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function colors()
    {
    	return $this->belongsToMany('App\Models\Color')->withTimestamps();
    }

    public function sizes()
    {
    	return $this->belongsToMany('App\Models\Size')->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Models\Order')->withTimestamps()->withPivot('qty', 'total', 'color', 'size');
    }
}
