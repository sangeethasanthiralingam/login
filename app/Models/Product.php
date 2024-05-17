<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected  $fillable = [
        'title',
        'description',
        'quantity',
        'price',
        'seller_price',
        'is_discount',
        'discount_percentage',
        'seller_id',
    ];
}
