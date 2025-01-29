<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warranty extends Model
{
    protected $fillable = [
        'client_name',
        'client_number',
        'car_model',
        'car_make',
        'car_color',
        'manufacture_year',
        'license_plate_number',
        'service_name',
        'master_name',
        'service_phone_number',
        'license_number',
        'installation_date',
        'brand_name',
        'film_model',
        'warranty_model',
        'service_life',
        'warranty_end_date',
        'client_code',
        'images_array',
    ];

    protected $casts = [
        'manufacture_year' => 'integer',
        'installation_date' => 'date',
        'warranty_end_date' => 'date',
        'images_array' => 'array',
    ];
}
