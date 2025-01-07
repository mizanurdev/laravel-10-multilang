<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'en_name',
        'bn_name',
        'en_designation',
        'bn_designation',
        'en_description',
        'bn_description',
        'image',
    ];
}
