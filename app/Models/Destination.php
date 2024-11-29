<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'des_sub_title',
        'des_head_title',
        'image',
        'des_card_title',
        'price',
        'days_trip',
    ];
    
}
