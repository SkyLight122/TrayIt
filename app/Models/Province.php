<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'id',
        'province'
    ];

    public function bakery_addresses(){
        return $this->hasMany(BakeryAddress::class);
    }
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
