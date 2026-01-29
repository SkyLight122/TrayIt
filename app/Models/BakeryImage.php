<?php

namespace App\Models;

use App\Models\Bakery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryImage extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bakery_id',
        'image_path'
    ];

    public function bakery(){
        return $this->belongsTo(Bakery::class);
    }
}
