<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'company_id',
        'accept',
        'dispatched',
        'coupon_id',
        'delivery',
        'delivery_tax',
        'deliveryman_id',
        'payment_method',
        'customer_id',
        'address_id',
        'paid',
        'feedback'
    ];

    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function deliveryman()
    {
        return $this->belongsTo(Deliveryman::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
