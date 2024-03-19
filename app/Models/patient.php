<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'name',
        'age',
        'gender',
        'user_id',
        'description'
    ];
}
