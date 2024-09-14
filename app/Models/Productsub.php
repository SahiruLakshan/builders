<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productsub extends Model
{
    use HasFactory;

    protected $table='subcategories';
    protected $fillable=[
        'name',
        'description',
    ];
}
