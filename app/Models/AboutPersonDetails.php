<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPersonDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_titile',
        'sub_titile',
        'discription',
        'btn_text',
        'btn_url'
        
    ];
}
