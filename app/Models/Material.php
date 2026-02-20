<?php

namespace App\Models;

use App\Models\HPP;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class Material extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'material',
        'unit_id',
        'unit_price',
    ];

    public function hpps(){
        return $this->hasMany(HPP::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}
