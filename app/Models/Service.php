<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's convention
    protected $table = 'services';

    // Fields that are mass assignable
    protected $fillable = ['servicename', 'description', 'status', 'updated_by'];

    public $timestamps = true;

}

