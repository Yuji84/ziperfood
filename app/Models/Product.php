<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'size',
        'category_id',
        'company_id',
        'active'
    ];

    use HasFactory;

    public function company()
    {
        return $this->belongsTo(Company::class)->get()->all()[0];
    }

    public function category()
    {
        return $this->belongsTo(Category::class)->get()->all()[0];
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->get()->all();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->get()->all();
    }
}
