<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'description',
        'title',
        'type',
    ];

    /**
     * Get the user that owns the seller.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
