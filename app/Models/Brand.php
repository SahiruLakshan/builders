<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table='brand';
    protected $fillable=[
        'b_name',
        'company_name',
        'country_of_origin',
        'production',
        'brand_contact_number',
        'email',
    ];
}
