<?php

namespace App\Http\Controllers;

use App\Mail\SpApprove;
use App\Models\City;

use App\Models\District;
use App\Models\Projects;
use App\Models\Service;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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
                'email' => 'required|email|max:255|unique:service_providers,email',
                's_name' => 'required|string|max:255',
                'grade' => 'required|string|max:50',
                'inputAddress' => 'required|string|max:500',
                'category' => 'required|array',
                'category.*' => 'string',
                'latitude' => 'required',
                'longitude' => 'required',
                'district' => 'required|integer',
                'city' => 'required|integer',
                'telephone' => 'nullable|string|max:15',
                'mobile' => 'required|string|max:15',
                'whatsapp' => 'nullable|string|max:15',
                'companyName' => 'required|string|max:255',
                'businessRegNo' => 'nullable|string|max:100',
                'noOfEmp' => 'required|integer',
                'employeesQualification' => 'nullable|string|max:255',
                'maxProjectValue' => 'nullable|string|max:50',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'services' => 'nullable|array',
                'services.*' => 'nullable|string|max:255',
                'directors' => 'array',
                'directors.*.name' => 'string|max:255',
                'directors.*.contact' => 'string|max:15',
            ]);

            $serviceProvider = new ServiceProvider();
            $serviceProvider->number = $validated['number'];
            $serviceProvider->email = $validated['email'];
            $serviceProvider->s_name = $validated['s_name'];
            $serviceProvider->grade = $validated['grade'];
            $serviceProvider->address = $validated['inputAddress'];
            $serviceProvider->category_id = json_encode($validated['category']);
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

            // Handle logo upload
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time() . '_' . $file->getClientOriginalName(); // Create a unique filename
                $file->move(public_path('assets/serviceprovider'), $filename); // Move the file to the desired directory
                $serviceProvider->logo = 'assets/serviceprovider/' . $filename; // Save the relative path
            }

            // Handle registrations upload
            if ($request->hasFile('registrations')) {
                $file = $request->file('registrations');
                $filename = time() . '_' . $file->getClientOriginalName(); // Create a unique filename
                $file->move(public_path('assets/serviceprovider'), $filename); // Move the file to the desired directory
                $serviceProvider->registrations = 'assets/serviceprovider/' . $filename; // Save the relative path
            }

            // Handle certifications upload
            if ($request->hasFile('certifications')) {
                $file = $request->file('certifications');
                $filename = time() . '_' . $file->getClientOriginalName(); // Create a unique filename
                $file->move(public_path('assets/serviceprovider'), $filename); // Move the file to the desired directory
                $serviceProvider->certifications = 'assets/serviceprovider/' . $filename; // Save the relative path
            }

            // Handle services
            $serviceProvider->services = json_encode($validated['services']);
            $serviceProvider->directors = json_encode($validated['directors']);
            $serviceProvider->save();
            return redirect()->back()->with('success', 'Service Provider added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }

    public function view(Request $request)
    {
        $query = $request->input('query');
        $serviceProviders = ServiceProvider::where('s_name', 'like', '%' . $query . '%')->orWhere('number', 'like', '%' . $query . '%')->orderBy('created_at', 'desc')->paginate(8);
        if ($request->ajax()) {
            return view('admin.viewtbl.serviceProviderPagination', compact('serviceProviders'))->render();
        }

        return view('admin.viewtbl.viewServiceProvider', compact('serviceProviders'));
    }

    public function approveServiceProviders(Request $request, $id)
    {
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->status = 'Approved';
        $serviceProvider->save();
        Mail::to($serviceProvider->email)->send(new SpApprove($serviceProvider));
        return redirect()->back()->with('success', 'Service Provider approved successfully!');
    }

    public function rejectServiceProviders(Request $request, $id)
    {
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->status = 'Rejected';
        $serviceProvider->save();

        return redirect()->back()->with('success', 'Service Provider rejected successfully!');
    }

    public function destroy($id)
    {
        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->delete();
        return redirect()->back()->with('success', 'Service Provider deleted successfully!');
    }

    public function updateserviceprovider($id)
    {
        $serviceProvider = ServiceProvider::find($id);
        $selecteddistrict = District::where('dis_id', $serviceProvider->district_id)->first();
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $services = Service::select('id', 'servicename')->get();
        return view('admin.updateforms.updateserviceProviders', compact('serviceProvider', 'dictricts', 'services', 'selecteddistrict'));
    }

    public function editserviceprovider(Request $request, $id)
    {
        $validated = $request->validate([
            'number' => 'required|string',
            'email' => 'required|email|max:255|unique:service_providers,email,' . $id,
            's_name' => 'required|string|max:255',
            'grade' => 'required|string|max:50',
            'inputAddress' => 'required|string|max:500',
            'category' => 'required|array',
            'category.*' => 'string',
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
            'providerImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'registrations' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'certifications' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
            'service_name' => 'nullable|array',
            'service_name.*' => 'nullable|string|max:255',
            'directors' => 'array',
            'directors.*.name' => 'string|max:255',
            'directors.*.contact' => 'string|max:15',
        ]);

        $serviceProvider = ServiceProvider::find($id);
        $serviceProvider->number = $validated['number'];
        $serviceProvider->email = $validated['email'];
        $serviceProvider->s_name = $validated['s_name'];
        $serviceProvider->grade = $validated['grade'];
        $serviceProvider->address = $validated['inputAddress'];
        $serviceProvider->category_id = json_encode($validated['category']);
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

        // Handle logo upload
        if ($request->hasFile('providerImage')) {
            $file = $request->file('providerImage');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/serviceprovider'), $filename);
            $serviceProvider->logo = 'assets/serviceprovider/' . $filename;
        }

        // Handle registrations upload
        if ($request->hasFile('registrations')) {
            $file = $request->file('registrations');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/serviceprovider'), $filename);
            $serviceProvider->registrations = 'assets/serviceprovider/' . $filename;
        }

        // Handle certifications upload
        if ($request->hasFile('certifications')) {
            $file = $request->file('certifications');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/serviceprovider'), $filename);
            $serviceProvider->certifications = 'assets/serviceprovider/' . $filename;
        }

        // Handle services
        $serviceProvider->services = json_encode($validated['service_name']);
        $serviceProvider->directors = json_encode($validated['directors']);
        $serviceProvider->save();

        return redirect()->back()->with('success', 'Service Provider updated successfully!');
    }
}
