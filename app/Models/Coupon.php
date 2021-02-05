<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'number', 'value', 'operation','active','company_id',
    ];

    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
