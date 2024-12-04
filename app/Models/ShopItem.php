<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ShopItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'product_id',
        'item',
        'discount',
        'units',
        'price',
    ];

    // Relationships
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function item()
    // {
    //     return $this->belongsTo(Item::class);
    // }
}
