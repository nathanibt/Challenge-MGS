<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'title', 'text', 'logo', 'address', 'menu_structure', 'slider_photos'
    ];

    protected $casts = [
        'menu_structure' => 'array',
        'slider_photos' => 'array'
    ];
}
