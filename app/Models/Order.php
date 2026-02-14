<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use App\Models\OrderProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'payment_id',
        'status',
        'total_price',
        'total_hpp',
        'gross_profit'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function order_products(){
        return $this->hasMany(OrderProduct::class);
    }
}
