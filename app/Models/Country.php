<?php

namespace App\Models;
use App\Models\Branch;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $fillable = ['name'];
    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}