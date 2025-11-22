<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'images' => 'array',
        'details' => 'array',

    ];

    protected $fillable = ['brand_id', 'name', 'image', 'images', 'description', 'size', 'weight', 'type', 'details'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}