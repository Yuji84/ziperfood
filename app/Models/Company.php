<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'street','number', 'complement', 'cep', 'neighborhood', 'city', 'state', 'phone', 'email'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function deliverymen()
    {
        return $this->hasMany(Deliveryman::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
