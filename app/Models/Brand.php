<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
     protected $fillable = ['slug', 'title', 'description'];

public function features()
{
    return $this->hasMany(Feature::class);
}

public function products()
{
    return $this->hasMany(Product::class);
}

}