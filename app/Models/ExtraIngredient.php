<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraIngredient extends Model
{
    use HasFactory;

    protected $table = 'extra_ingredient';
    
    protected $fillable = [
        'extra_id',
        'ingredient_id',
    ];
}
