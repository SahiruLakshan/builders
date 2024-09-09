<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table='tbl_ds';
    protected $fillable=[
        'ds_name',
        'dis_id'
    ];
}
