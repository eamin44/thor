<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_sub_title',
        'book_head_title',
        'book_title',
        'book_des',
        'image',
        'card_title',
        'cart_des',
        'all_people',
    ];
}
