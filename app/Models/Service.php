<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'ser_name',
        'ser_title',
        'ser_img',
        'ser_card_title',
        'ser_card_des'
    ];
}
