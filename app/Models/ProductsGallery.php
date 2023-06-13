<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'url_image',
        'is_featured',
    ];

}
