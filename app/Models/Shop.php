<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shops';
    protected $fillable = [
        'number',
        'name',
        'email',
        'address',
        'district',
        'p_number',
        'w_number',
        'city',
        'latitude',
        'longitude',
        'category',
        'location',
        'start_time',
        'end_time',
        'fb_link',
        'br',
        'shop_img',
        'shop_approve',
        'product_approve',
        'cancel_shop',
        'cancel_product',
        'company_name',
        'c_br',
        'directors'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district', 'dis_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city', 'ds_id');
    }

    public function shopproducts()
    {
        return $this->hasMany(Shopproduct::class, 'shop_id');
    }
}
