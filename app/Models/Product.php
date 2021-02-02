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
}
