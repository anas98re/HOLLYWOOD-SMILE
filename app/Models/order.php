<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'Quantity',
        'time',
        'student_id',
        'product_id',
        'discountValue'
    ];

    public function students()
    {
        return $this->belongsTo(student::class, 'student_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo(product::class, 'product_id', 'id');
    }



}
