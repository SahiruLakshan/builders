<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'number','s_name', 'grade', 'address', 'category_id', 'district_id', 'city_id', 
        'telephone', 'mobile', 'whatsapp', 'company_name', 'business_reg_no', 
        'no_of_employees', 'employees_qualification', 'max_project_value',
    ];
}
