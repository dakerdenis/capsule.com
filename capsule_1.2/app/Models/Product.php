<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'verification_date',
        'warranty',
        'type',
        'service_id',
        'country',
        'verification_counter', 
    ];

    protected $casts = [
        'verification_date' => 'date',
    ];
}
