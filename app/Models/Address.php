<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'customer_id', 'street', 'number','complement','cep','neighborhood','city','state','latitude','longitude'
    ];

    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class)->get()->all()[0];
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->get()->all();
    }


}
