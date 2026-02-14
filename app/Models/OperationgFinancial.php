<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperationgFinancial extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'bakery_id',
        'amount',
        'financial_category_id'
    ];
}
