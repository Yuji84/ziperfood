<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'customer_id', 'street', 'number','complement','cep','neighborhood','city','state','latitude','longitude'
    ];
    use HasFactory;
}
