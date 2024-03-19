<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'photo',
        'discount_value',
        'store_manager_id',
        'Quantity',
        'category',
    ];
}
