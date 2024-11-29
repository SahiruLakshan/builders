<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'tbl_ds';
    protected $fillable = [
        'ds_id',
        'ds_name',
        'dis_id'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'dis_id', 'dis_id');
    }

}
