<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    
    protected $fillable = [
        'carbon_code',
        'php_code',
        'name',
        'name',
        'is_rtl',
        'is_default',
        'is_active'
    ];
}
