<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table='shops';
    protected $fillable=[
        'name',
        'email',
        'address',
        'district',
        'p_number',
        'city',
        'category',
        'location',
        'start_time',
        'end_time',
        'fb_link',
        'br',
        'shop_img',
        
    ];
}
