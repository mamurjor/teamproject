<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacksPricing extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name',
        'price',
        'button_text',
        'button_url',
        'package_feature'
        
    ];
}
