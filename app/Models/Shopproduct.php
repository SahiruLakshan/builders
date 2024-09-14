<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopproduct extends Model
{
    use HasFactory;

    protected $table='shop_product';
    protected $fillable=[
        'shop_id',
        'product_name',
        'subcategory_id',
        'product_id',
        'brand_id',
        'product_category_id',
        'measurement_id',
        'unit_price',
        'quantity',
        'image',
        'color',
        'other'
    ];
}
