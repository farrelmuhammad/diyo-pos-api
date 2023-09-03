<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    // use HasFactory;

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = ['cart', 'total_price', 'created_at', 'payment_method'];
    protected $casts = ['cart' => 'array'];
}
