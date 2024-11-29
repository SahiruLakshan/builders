<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $table='service_providers';

    protected $fillable = [
        'number','s_name', 'grade', 'address', 'category_id', 'district_id','longitude', 'latitude', 'city_id', 
        'telephone', 'mobile', 'whatsapp', 'company_name', 'business_reg_no', 
        'no_of_employees', 'employees_qualification', 'max_project_value',
    ];

    // public function category()
    // {
    //     return $this->belongsTo(Service::class, 'category_id');
    // }

    // // Define relationship to District
    // public function district()
    // {
    //     return $this->belongsTo(District::class, 'district_id');
    // }

    // // Define relationship to City
    // public function city()
    // {
    //     return $this->belongsTo(City::class, 'city_id');
    // }
}
