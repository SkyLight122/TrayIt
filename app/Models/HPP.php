<?php

namespace App\Models;

use App\Models\Material;
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

    public function bakery(){
        return $this->belongsTo(Bakery::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function material(){
        return $this->belongsTo(Material::class);
    }
    
}
