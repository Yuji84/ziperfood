<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'complement', 'cep', 'neighborhood', 'city', 'state', 'phone', 'email'
    ];

    public function users()
    {
        return $this->hasMany(User::class)->get()->all();
    }

    public function categories()
    {
        return $this->hasMany(Category::class)->get()->all();
    }

    public function tags()
    {
        return $this->hasMany(Tag::class)->get()->all();
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class)->get()->all();
    }

    public function products()
    {
        return $this->hasMany(Product::class)->get()->all();
    }

    public function customers()
    {
        return $this->hasMany(Customer::class)->get()->all();
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class)->get()->all();
    }

    public function deliverymen()
    {
        return $this->hasMany(Deliveryman::class)->get()->all();
    }

    public function orders()
    {
        return $this->hasMany(Order::class)->get()->all();
    }
}
