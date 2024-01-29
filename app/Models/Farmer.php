<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'full_name',
        'national_id',
        'phone',
        'email',
        'location',
        'crop_type',
        'farming_experience',
        'farming_type',
        'gender',
        'farmSize',
        'cropsGrown',
    ];
}
