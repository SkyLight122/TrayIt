<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HPP extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bakery_id',
        'product_id',
        'material_id',
        'quantity'
    ];
}
