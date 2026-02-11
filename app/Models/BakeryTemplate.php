<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryTemplate extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];

    public function bakery(){
        return $this->hasOne(Bakery::class);
    }
}
