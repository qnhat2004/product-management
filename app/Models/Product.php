<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'description',
        'category',
        'image',
        'rating_count',
        'rating_rate',
        
    ];

    public $timestamps = false;
}