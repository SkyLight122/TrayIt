<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialCategory extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'category',
        'type'
    ];

    public function operation_financials(){
        return $this->hasMany(OperationgFinancial::class);
    }
}
