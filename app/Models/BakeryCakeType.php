<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryCakeType extends Model
{
    use SoftDeletes;
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
