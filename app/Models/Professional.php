<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{

    use HasFactory;

    protected $table='professional';

    protected $fillable = [
        'professional_number',
        'name',
        'profile_image',
        'phone',
        'email',
        'address',
        'district',
        'city',
        'zip',
        'dob',
        'linkedin',
        'job_title',
        'experience_level',
        'years_of_experience',
        'specializations',
        'skills',
        'certifications',
        'certificates',
        'license_number',
    ];    
}
