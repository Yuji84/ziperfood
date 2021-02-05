<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }
}
