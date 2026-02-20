<?php

namespace App\Models;

use App\Models\Bakery;
use App\Models\CakeType;
use App\Models\OrderProduct;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'bakery_id',
        'price',
        'description',
        'cake_type_id',
        'preorder'
    ];

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function bakery()
    {
        return $this->belongsTo(Bakery::class);
    }

    public function cake_type()
    {
        return $this->belongsTo(CakeType::class);
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function product_variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function hpps(){
        return $this->hasOne(HPP::class);
    }
}
