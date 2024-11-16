<?php

namespace App\Http\Controllers;
use App\Models\City;

use App\Models\District;
use App\Models\Service;
use App\Models\ServiceProvider;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function addserviceproviders(Request $request)
    {
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $services = Service::select('id', 'servicename')->get();
        // dd($dictricts);
        return view('admin.addserviceprovider', compact('dictricts', 'services'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                's_name' => 'required|string|max:255',
                'grade' => 'required|string|max:50',
                'inputAddress' => 'required|string|max:500',
                'category' => 'required|integer',
                'district' => 'required|integer',
                'city' => 'required|integer',
                'telephone' => 'nullable|string|max:15',
                'mobile' => 'required|string|max:15',
                'whatsapp' => 'nullable|string|max:15',
                'companyName' => 'required|string|max:255',
                'businessRegNo' => 'required|string|max:100',
                'noOfEmp' => 'required|integer',
                'employeesQualification' => 'nullable|string|max:255',
                'maxProjectValue' => 'nullable|string|max:50',
            ]);

            $serviceProvider = new ServiceProvider();
            $serviceProvider->s_name = $validated['s_name'];
            $serviceProvider->grade = $validated['grade'];
            $serviceProvider->address = $validated['inputAddress'];
            $serviceProvider->category_id = $validated['category'];
            $serviceProvider->district_id = $validated['district'];
            $serviceProvider->city_id = $validated['city'];
            $serviceProvider->telephone = $validated['telephone'];
            $serviceProvider->mobile = $validated['mobile'];
            $serviceProvider->whatsapp = $validated['whatsapp'];
            $serviceProvider->company_name = $validated['companyName'];
            $serviceProvider->business_reg_no = $validated['businessRegNo'];
            $serviceProvider->no_of_employees = $validated['noOfEmp'];
            $serviceProvider->employees_qualification = $validated['employeesQualification'];
            $serviceProvider->max_project_value = $validated['maxProjectValue'];
            $serviceProvider->save();

            return redirect()->back()->with('success', 'Service Provider added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }

    
}
