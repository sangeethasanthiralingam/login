<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'category_id', 
        'seller_id', 
        'price', 
        'availability', 
        'description', 
        'origin_id', 
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }
}
