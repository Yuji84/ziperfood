<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = [
        'name',
        'company_id'
    ];
    
    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class)->get()->all()[0];
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->get()->all();
    }
}
