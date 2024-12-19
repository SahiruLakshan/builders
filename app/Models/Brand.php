<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    protected $fillable = [
        'b_name',
        'company_name',
        'address',
        'description',
        'country_of_origin',
        'production',
        'brand_contact_number',
        'email',
        'brand_img',
        'br',
        'contact_person',
        'designation',
        'whatsapp_no',
        'b_email',
        'b_web_link',
        'directors'
    ];
    public function brandProducts()
    {
        return $this->hasMany(BrandProduct::class);
    }

    public function shopProducts()
    {
        return $this->hasMany(ShopProduct::class, 'brand_id', 'id');
    }
}
