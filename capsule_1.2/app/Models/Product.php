<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table name (optional, only needed if it doesn't follow Laravel's naming convention)
    protected $table = 'products';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'code',
        'verification_date',
        'warranty',
        'type',
        'service_id',
    ];

    // Define casting for specific fields
    protected $casts = [
        'verification_date' => 'date',
    ];
}
