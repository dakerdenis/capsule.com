<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'cooperation',
        'list_of_products',
        'email',
        'password', // Add this field
    ];

    // Define casting for specific fields
    protected $casts = [
        'list_of_products' => 'array',
    ];

    // Mutator for hashing passwords
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
