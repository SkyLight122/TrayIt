<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryAddress extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bakery_id',
        'address',
        'rt',
        'rw',
        'post_code',
        'city_id',
        'province_id',
    ];

    public function bakery(){
        return $this->belongsTo(Bakery::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }
}
