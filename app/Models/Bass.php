<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bass extends Model
{
    use HasFactory;

    protected $table = 'bass';

    protected $fillable = [
        'number',
        'nic',
        'fullname',
        'nic_image',
        'back_nic_image',
        'profile_image',
        'telephone_number',
        'phone_number',
        'b_email',
        'b_address',
        'district_id',
        'city_id',
        'zip',
        'dob',
        'linkedin',
        'jobTitle',
        'experienceLevel',
        'yearsOfExperience',
        'skills',
        'specialization',
        'workingArea',
        'certification_details',
        'certifications',
        'company_name',
        'business_reg_no',
        'registrations',
        'provider_image',
        'no_of_emp',
        'employees_qualification',
        'max_project_value',
        'service_name',
        'directors',
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'dis_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'ds_id');
    }
}