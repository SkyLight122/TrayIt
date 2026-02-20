<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class unit extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'unit'
    ];

    public function materials(){
        return $this->hasMany(Material::class);
    }
}
