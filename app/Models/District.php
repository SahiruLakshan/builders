<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'tbl_district';

    protected $fillable = [
        'dis_id',
        'pro_id',
        'dis_code',
        'dis_name',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class, 'district', 'dis_id');
    }

    public function city()
    {
        return $this->hasMany(City::class, 'dis_id', 'dis_id');
    }

}
