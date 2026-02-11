<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'province'
    ];

    public function bakery_addresses(){
        return $this->hasMany(BakeryAddress::class);
    }
}
