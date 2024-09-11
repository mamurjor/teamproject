<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPerInfos extends Model
{
    use HasFactory;
    protected $fillable = [
        'birthday',
        'email',
        'phone',
        'skype',
        'address'
        
    ];
}
