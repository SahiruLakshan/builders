<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
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
        'skills',
        'license_number',
    ];

    public function certifications()
    {
        return $this->hasMany(Certification::class);
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class, 'professional_specialization');
    }
}
