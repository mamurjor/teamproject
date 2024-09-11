<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeExpertise extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'designation',
        'discription',
    ];
}
