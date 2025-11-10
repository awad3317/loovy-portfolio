<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['country_id', 'name', 'address', 'phone'];
 public function country()
{
    return $this->belongsTo(Country::class);
}

}