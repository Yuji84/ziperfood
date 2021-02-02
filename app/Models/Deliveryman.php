<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliveryman extends Model
{
    protected $fillable = [
        'number', 'celphone','company_id'
    ];
    use HasFactory;
}
