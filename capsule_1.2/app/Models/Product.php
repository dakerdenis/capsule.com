<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'is_active', // ✅ добавь сюда
        'activation_expires_at',
        'activation_expires_at' => 'datetime',
    ];

    protected $casts = [
        'verification_date' => 'date',
    ];
        // ✅ Динамическая проверка активности
        public function getIsActiveAttribute($value)
        {
            if ($this->activation_expires_at && now()->greaterThan($this->activation_expires_at)) {
                return false;
            }
    
            return $value;
        }
}
