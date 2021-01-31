<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'address', 'complement', 'cep', 'neighborhood', 'city', 'state', 'phone', 'email'
    ];
    use HasFactory;
}
