<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Service;
use App\Models\ProfessionCategory;
use App\Models\Professional;
use Illuminate\Support\Facades\File;
use App\Models\Specialization;

class ProfessionalController extends Controller
{
    public function index()
    {
        return view('admin.addprofessionalsCategory');
    }
    public function addadminprofessionals(Request $request)
    {
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $cate = ProfessionCategory::all();
        // dd($dictricts);
        return view('admin.addprofessinals', compact('dictricts', 'cate'));
    }

    public function addprofessionals(Request $request)
    {
        $prof_cate = new ProfessionCategory();
        $prof_cate->name = $request->input('name');
        $prof_cate->description = $request->input('description');
        $prof_cate->save();

        return redirect()->back()->with('success', 'Profession Category Added Successfully');
    }

    public function view()
    {
        $prof_cate = ProfessionCategory::all();
        return view('admin.viewtbl.viewprofessionalcategory', compact('prof_cate'));
    }



    // public function webprofessional(Request $request)
    // {
    //     $districts = District::with('city')->select('dis_id', 'dis_name')->get();
    //     $services = Service::select('id', 'servicename')->get();
    //     dd($districts);
    //     return view('webpages.professionalform', compact('districts', 'services'));
    // }
    // public function webprofessional(Request $request)
    // {
    //     $districts = District::with('city')->select('dis_id', 'dis_name')->get();
    //     $services = Service::select('id', 'servicename')->get();

    //     return view('webpages.professionalform', compact('districts', 'services'));
    // }
    // In your controller
    public function professionalForm(Request $request)
    {
        $districts = District::with('city')->select('dis_id', 'dis_name')->get();
        $services = Service::select('id', 'servicename')->get();
        return view('webpages.professionalsform', compact('districts', 'services'));
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming data
            $request->validate([
                'professionalNumber' => 'required',
                'p_Name' => 'required|string|max:255',
                'profileImage' => 'nullable|image|max:2048',
                'phoneNumber' => 'required|digits_between:10,15|regex:/^[0-9]+$/',
                'p_email' => 'required|email|max:255|unique:professionals,email',
                'p_address' => 'required|string|max:500',
                'district' => 'required|string|max:100',
                'city' => 'required|string|max:100',
                'zip' => 'required|digits:5',
                'dob' => 'required|date|before:today',
                'linkedin' => 'nullable|url|max:255',
                'jobTitle' => 'required|string|max:100',
                'experienceLevel' => 'required|in:entry,mid,senior,expert', // Adjust as per your application's levels
                'yearsOfExperience' => 'required|integer|min:0|max:50',
                'specialization' => 'nullable|array',
                'specialization.*' => 'string|max:100', // Each specialization item
                'skills' => 'nullable|string|max:500',
                'certificationName' => 'nullable|array',
                'certificationName.*' => 'string|max:100', // Each certification name
                'certifications' => 'nullable|array',
                'certifications.*' => 'string|max:255', // Each certification path
                'licenseNumber' => 'nullable|string|max:50|unique:professionals,license_number',
            ]);


            // Handle file upload
            // $profileImagePath = null;
            // if ($request->hasFile('profileImage')) {
            //     $profileImage = $request->file('profileImage');
            //     $profileImagePath = $profileImage->move(public_path('assets/profile'), $profileImage->getClientOriginalName());
            // }

            if ($request->hasFile('profileImage')) {
                $file = $request->file('profileImage');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('assets/professional', $filename);
            }

            $certifications = [];
            if ($request->certificationName) {
                foreach ($request->certificationName as $index => $name) {
                    $certifications[] = [
                        'name' => $name,
                        'authority' => $request->issuingAuthority[$index] ?? null,
                        'issued' => $request->dateIssued[$index] ?? null,
                        'expires' => $request->expirationDate[$index] ?? null,
                    ];
                }
            }

            $certificationPaths = [];
            if ($request->hasFile('certificationPdf')) {
                foreach ($request->file('certificationPdf') as $file) {
                    $path = $file->move(public_path('assets/certificate'), $file->getClientOriginalName());
                    $certificationPaths[] = 'assets/certificate/' . $file->getClientOriginalName();
                }
            }

            Professional::create([
                'professional_number' => $request->professionalNumber,
                'name' => $request->p_Name,
                'profile_image' => $filename,
                'phone' => $request->phoneNumber,
                'email' => $request->p_email,
                'address' => $request->p_address,
                'district' => $request->district,
                'city' => $request->city,
                'zip' => $request->zip,
                'dob' => $request->dob,
                'linkedin' => $request->linkedin,
                'job_title' => $request->jobTitle,
                'experience_level' => $request->experienceLevel,
                'years_of_experience' => $request->yearsOfExperience,
                'specializations' => json_encode($request->specialization),
                'skills' => $request->skills,
                'certifications' => json_encode($certifications),
                'certificates' => json_encode($certificationPaths),
                'license_number' => $request->licenseNumber,
            ]);

            return redirect()->back()->with('success', 'Professional added successfully!');
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function viewpro()
    {
        $prof = Professional::all();
        return view('admin.viewtbl.viewprofessionals', compact('prof'));
    }
}
