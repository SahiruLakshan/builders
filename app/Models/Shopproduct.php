<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopproduct extends Model
{
    use HasFactory;

    protected $table='shop_product';
    protected $fillable=[
        'pro_no',
        'product_id',
        'subcategory_id',
        'brand_id',
        'product_category_id',
        'other_categories',
        'measurement_id',
        'unit_price',
        'quantity',
        'image',
        'color',
        'vendor',
        'discount',
        'cost',
        'attachment',
        'description',
        'applications',
        'other'
    ];

    protected $casts = [
        'other_categories' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Productcategory::class, 'product_category_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
