<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Service extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'logo',
        'cooperation',
        'list_of_products',
        'email',
        'password',
    ];

    protected $casts = [
        'list_of_products' => 'array',
    ];

    // Fix for preventing double hashing
    public function setPasswordAttribute($value)
    {
        if (\Illuminate\Support\Facades\Hash::needsRehash($value)) {
            $this->attributes['password'] = bcrypt($value);
        } else {
            $this->attributes['password'] = $value;
        }
    }
}
