<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Service;
use App\Models\ProfessionCategory;
use App\Models\Professional;
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
        // dd($dictricts);
        return view('admin.addprofessinals', compact('dictricts', ));
    }

    public function addprofessionals(Request $request){
        $prof_cate = new ProfessionCategory();
        $prof_cate->name = $request->input('name');
        $prof_cate->description = $request->input('description');
        $prof_cate->save();

        return redirect()->back()->with('success', 'Profession Category Added Successfully');
    }

    public function view(){
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
        
        // $request->validate([
        //     'professionalNumber' => 'required|unique:professionals,professional_number',
        //     'p_Name' => 'required|string|max:255',
        //     'profileImage' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        //     'certificationPdf.*' => 'nullable|file|mimes:pdf|max:2048',
        // ]);

        // Upload profile image
        $profileImagePath = null;
        if ($request->hasFile('profileImage')) {
            $profileImagePath = $request->file('profileImage')->store('profile_images', 'public');
        }

        // Create professional
        $professional = Professional::create([
            'professional_number' => $request->professionalNumber,
            'name' => $request->p_Name,
            'profile_image' => $profileImagePath,
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
            'skills' => $request->skills,
            'license_number' => $request->licenseNumber,
        ]);

        // Add specializations
        if ($request->has('specialization')) {
            $specializationIds = Specialization::whereIn('name', $request->input('specialization'))->pluck('id')->toArray();

            $professional->specializations()->sync($request->specialization);
        }

        // Add certifications
        if ($request->has('certificationName')) {
            foreach ($request->certificationName as $key => $name) {
                $pdfPath = null;
                if ($request->hasFile('certificationPdf.' . $key)) {
                    $pdfPath = $request->file('certificationPdf.' . $key)->store('certifications', 'public');
                }

                $professional->certifications()->create([
                    'certification_name' => $name,
                    'issuing_authority' => $request->issuingAuthority[$key],
                    'date_issued' => $request->dateIssued[$key],
                    'expiration_date' => $request->expirationDate[$key],
                    'certification_pdf' => $pdfPath,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Professional added successfully.');
    }


}
