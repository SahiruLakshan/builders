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
        'city',
        'location',
        'start_time',
        'end_time',
        'fb_link',
        'br',
        'logo_img',
        
    ];
}
