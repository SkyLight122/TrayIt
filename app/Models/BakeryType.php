<?php

namespace App\Models;

use App\Models\Bakery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryType extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'type'
    ];

    public function bakeries(){
        return $this->hasMany(Bakery::class);
    }
}
