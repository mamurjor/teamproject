<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'person_text',
        'user_name',
        'short_dis',
        'button_text',
        'button_url',
        'image'

    ];
}
