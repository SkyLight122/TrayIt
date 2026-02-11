<?php

namespace App\Models;

use App\Models\Product;
use App\Models\BakeryType;
use App\Models\User;
use App\Models\BakeryImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bakery extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'description',
        'bakery_address_id',
        'bakery_type_id',
        'pickup_date',
        'bakery_thumbnail',
        'logo_path',
        'order_per_day',
        'bakery_template_id',
        'primary_color',
        'secondary_color',
        'accent_color'
    ];

    public function bakery_type(){
        return $this->belongsTo(BakeryType::class);
    }

    public function bakery_images(){
        return $this->hasMany(BakeryImage::class);
    }

    // public function bakeries_users(){
    //     return $this->hasMany(BakeryUser::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function cake_types(){
        return $this->belongsToMany(CakeType::class, 'bakery_cake_types');
    }

    public function bakery_addresses(){
        return $this->hasMany(BakeryAddress::class);
    }

    public function bakery_template(){
        return $this->belongsTo(BakeryTemplate::class);
    }
}
