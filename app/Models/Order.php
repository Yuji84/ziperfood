<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'request', 'accept', 'dispatched','coupon_id','delivery','delivery_tax','deliveryman_id','payment_method','customer_id','address_id','paid'
    ];
    use HasFactory;
}
