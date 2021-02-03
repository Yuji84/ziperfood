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
        return $this->belongsTo(Company::class)->get()->all()[0];
    }

    public function deliveryman()
    {
        return $this->belongsTo(Deliveryman::class)->get()->all()[0];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class)->get()->all()[0];
    }

    public function address()
    {
        return $this->belongsTo(Address::class)->get()->all()[0];
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class)->get()[0];
    }
}
