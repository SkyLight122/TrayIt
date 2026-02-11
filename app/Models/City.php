<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'city'
    ];

    public function bakery_addresses(){
        return $this->hasMany(BakeryAddress::class);
    }
}
