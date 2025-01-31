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
        'cooperation',
        'list_of_products',
        'email',
        'password',
    ];

    protected $casts = [
        'list_of_products' => 'array',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
