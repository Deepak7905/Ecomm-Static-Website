<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'order_id',
        'signature',
        'product_name',
        'product_price',
        'image',
        'user_id',
        'user_name',
        'user_email',
        'user_phone',
        'user_address',
    ];
    
}
