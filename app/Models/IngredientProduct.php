<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientProduct extends Model
{
    protected $table = 'ingredient_product';
    
    protected $fillable = [
        'ingredient_id',
        'product_id'
    ];
    use HasFactory;
}
