<?php

namespace App\Models;

use App\Models\User;
use App\Models\Bakery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BakeryUser extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bakery_id',
        'user_id'
    ];

    public function bakery(){
        return $this->belongsTo(Bakery::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
