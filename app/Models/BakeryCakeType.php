<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BakeryCakeType extends Model
{
    protected $fillable = [
        'bakery_id',
        'cake_type_id'
    ];

    public function bakery(){
        return $this->belongsTo(Bakery::class);
    }

    public function cake_type(){
        return $this->belongsTo(CakeType::class);
    }
}
