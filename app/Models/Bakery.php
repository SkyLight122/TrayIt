<?php

namespace App\Models;

use App\Models\Product;
use App\Models\BakeryType;
use App\Models\BakeryUser;
use App\Models\BakeryImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bakery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'description',
        'address',
        'bakery_type_id',
        'order_per_day',
        'pickup_date',
        'logo_path'
    ];

    public function bakery_type(){
        return $this->belongsTo(BakeryType::class);
    }

    public function bakery_images(){
        return $this->hasMany(BakeryImage::class);
    }

    public function bakeries_users(){
        return $this->hasMany(BakeryUser::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
