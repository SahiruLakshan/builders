<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BassCategory extends Model
{
    use HasFactory;
    protected $table = 'bass_categories';
    protected $fillable = ['name', 'description'];
}