<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'celphone', 'company_id',
    ];

    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class)->get()->all()[0];
    }

    public function addresses()
    {
        return $this->hasMany(Address::class)->get()->all();
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->get()->all();
    }
}
