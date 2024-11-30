<?php

namespace App\Http\Controllers;
use App\Models\City;

use App\Models\District;
use App\Models\Service;
use App\Models\ServiceProvider;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{

    // public function viewserviceproviders()
    // {
    //     // $services = Service::all();
    //     $services = Service::paginate(10);
    //     return view('admin.viewtbl.viewServiceProviders', compact('services')); // Blade file to display the form
    // }

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
                'number' => 'required|string',
                's_name' => 'required|string|max:255',
                'grade' => 'required|string|max:50',
                'inputAddress' => 'required|string|max:500',
                'category' => 'required|integer',
                'latitude' => 'required',
                'longitude' => 'required',
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
            $serviceProvider->number = $validated['number'];
            $serviceProvider->s_name = $validated['s_name'];
            $serviceProvider->grade = $validated['grade'];
            $serviceProvider->address = $validated['inputAddress'];
            $serviceProvider->category_id = $validated['category'];
            $serviceProvider->latitude = $validated['latitude'];
            $serviceProvider->longitude = $validated['longitude'];
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


    public function view(){
        $serviceProviders = ServiceProvider::all();
        return view('admin.viewtbl.viewServiceProvider',compact('serviceProviders'));
    }

    public function approveServiceProviders(Request $request, $id){
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->status = 'Approved';
        $serviceProvider->save();
        return redirect()->back()->with('success', 'Service Provider approved successfully!');
    }

    public function rejectServiceProviders(Request $request, $id){
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->status = 'Rejected';
        $serviceProvider->save();
        return redirect()->back()->with('success', 'Service Provider rejected successfully!');
    }

    public function destroy($id){
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->delete();
        return redirect()->back()->with('success', 'Service Provider deleted successfully!');

    }

    
}
