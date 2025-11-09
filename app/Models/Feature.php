<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['brand_id', 'icon', 'color', 'title', 'text'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}