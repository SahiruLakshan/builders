<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\BassCategory;
use App\Models\Bass;
use Illuminate\Support\Facades\Redis;

class BassController extends Controller
{
    public function index()
    {
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $allCities = City::all(); // Fetch all cities directly from the City model
        $bassCategories = BassCategory::all();
        return view('admin.addbass', compact('dictricts', 'allCities', 'bassCategories'));
    }
    // meken tama bn distric city ehema gnne form wlaala


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        BassCategory::create($validated);

        return redirect()->back()->with('success', 'Bass Category added successfully!');
    }

    public function addbass(Request $request)
    {
        try {
            $validated = $request->validate([
                'number' => 'required|string|unique:bass',
                'nic' => 'required|string|unique:bass',
                'fullname' => 'required|string|max:255',
                'nicImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'backNicImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'telephoneNumber' => 'nullable|string|max:15',
                'phoneNumber' => 'required|string|max:15',
                'b_email' => 'required|email|unique:bass',
                'b_address' => 'required|string',
                'district_id' => 'required|exists:tbl_district,dis_id',
                'city_id' => 'required|exists:tbl_ds,ds_id',
                'zip' => 'nullable|string|max:10',
                'dob' => 'nullable|date',
                'linkedin' => 'nullable|string|max:255',
                'jobTitle' => 'required|string|max:255',
                'experienceLevel' => 'required|string|max:50',
                'yearsOfExperience' => 'nullable|integer',
                'skills' => 'nullable|string',
                // 'specialization' => 'nullable|array',
                'workingArea' => 'nullable|array',
                'certification_details' => 'nullable|array',
                'certifications' => 'nullable|array', // Ensure certifications is an array
                'certifications.*' => 'file|mimes:pdf,doc,docx,jpg,png', // Ensure each certification is a string
                'companyName' => 'nullable|string|max:255',
                'businessRegNo' => 'nullable|string|max:255',
                'registrations' => 'nullable|file|mimes:pdf,doc,docx,jpg,png',
                'providerImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'noOfEmp' => 'nullable|integer',
                'employeesQualification' => 'nullable|string|max:255',
                'maxProjectValue' => 'nullable|string|max:255',
                'service_name' => 'nullable|array',
                'directors' => 'nullable|array',
            ]);

            // Handle image uploads
            if ($request->hasFile('nicImage')) {
                $nicImage = $request->file('nicImage');
                $nicImageName = time() . '_' . $nicImage->getClientOriginalName();
                $nicImage->move(public_path('assets/bass'), $nicImageName);
            }

            if ($request->hasFile('backNicImage')) {
                $backNicImage = $request->file('backNicImage');
                $backNicImageName = time() . '_' . $backNicImage->getClientOriginalName();
                $backNicImage->move(public_path('assets/bass'), $backNicImageName);
            }

            if ($request->hasFile('profileImage')) {
                $profileImage = $request->file('profileImage');
                $profileImageName = time() . '_' . $profileImage->getClientOriginalName();
                $profileImage->move(public_path('assets/bass'), $profileImageName);
            }

            $certificationDetails = $request->input('certificationDetails');
            $certificationFiles = [];

            if ($request->hasFile('certifications')) {
                foreach ($request->file('certifications') as $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('assets/bass'), $fileName);
                    $certificationFiles[] = $fileName;
                }
            }

            Bass::create([
                'number' => $validated['number'],
                'nic' => $validated['nic'],
                'fullname' => $validated['fullname'],
                'nic_image' => $nicImageName,
                'back_nic_image' => $backNicImageName,
                'profile_image' => $profileImageName,
                'telephone_number' => $validated['telephoneNumber'],
                'phone_number' => $validated['phoneNumber'],
                'b_email' => $validated['b_email'],
                'b_address' => $validated['b_address'],
                'district_id' => $validated['district_id'],
                'city_id' => $validated['city_id'],
                'zip' => $validated['zip'],
                'dob' => $validated['dob'],
                'linkedin' => $validated['linkedin'],
                'jobTitle' => $validated['jobTitle'],
                'experienceLevel' => $validated['experienceLevel'],
                'yearsOfExperience' => $validated['yearsOfExperience'],
                'skills' => $validated['skills'],
                // 'specialization' => json_encode($validated['specialization']),
                'workingArea' => json_encode($validated['workingArea']),
                'certification_details' => json_encode($certificationDetails),
                'certifications' => json_encode($certificationFiles),
                'company_name' => $validated['companyName'],
                'business_reg_no' => $validated['businessRegNo'],
                'registrations' => $validated['registrations'],
                'provider_image' => $validated['providerImage'],
                'no_of_emp' => $validated['noOfEmp'],
                'employees_qualification' => $validated['employeesQualification'],
                'max_project_value' => $validated['maxProjectValue'],
                'service_name' => json_encode($validated['service_name']),
                'directors' => json_encode($validated['directors']),
            ]);

            return redirect()->back()->with('success', 'Bass added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }

    public function viewadminbass(Request $request)
    {
        $query = $request->input('query');

        $bass = Bass::where('fullname', 'like', '%' . $query . '%')->orWhere('number', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.Viewadminbass', compact('bass'))->render();
        }
        return view('admin.viewtbl.Viewadminbass', compact('bass'));
    }

    public function viewbasscate(Request $request)
    {
        $query = $request->input('query');

        $basscate = BassCategory::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.bassCategorypagination', compact('basscate'))->render();
        }
        return view('admin.viewtbl.viewBassCategory', compact('basscate'));
    }

    public function deleteBassCategory($id)
    {
        $bassCategory = BassCategory::find($id);

        if ($bassCategory) {
            $bassCategory->delete();
            return redirect()->back()->with('success', 'Bass category deleted successfully.');
        }

        return redirect()->back()->with('error', 'Bass category not found.');
    }

    public function deleteBass($id)
    {
        $bass = Bass::find($id);

        if ($bass) {
            // Delete associated images
            if (file_exists(public_path('assets/bass/' . $bass->nic_image))) {
                unlink(public_path('assets/bass/' . $bass->nic_image));
            }
            if (file_exists(public_path('assets/bass/' . $bass->back_nic_image))) {
                unlink(public_path('assets/bass/' . $bass->back_nic_image));
            }
            if (file_exists(public_path('assets/bass/' . $bass->profile_image))) {
                unlink(public_path('assets/bass/' . $bass->profile_image));
            }
            // Delete certification files
            $certificationFiles = json_decode($bass->certifications, true);
            if (is_array($certificationFiles)) {
                foreach ($certificationFiles as $file) {
                    if (file_exists(public_path('assets/bass/' . $file))) {
                        unlink(public_path('assets/bass/' . $file));
                    }
                }
            }

            $bass->delete();
            return redirect()->back()->with('success', 'Bass deleted successfully.');
        }

        return redirect()->back()->with('error', 'Bass not found.');
    }

    public function editBassCategory($id)
    {
        $bassCategory = BassCategory::find($id);

        if ($bassCategory) {
            return view('admin.updateforms.updatebassCategory', compact('bassCategory'));
        }

        return redirect()->back()->with('error', 'Bass category not found.');
    }

    public function updateBassCategory(Request $request, $id)
    {
        $bassCategory = BassCategory::find($id);

        if ($bassCategory) {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);

            $bassCategory->update($validated);

            return redirect()->back()->with('success', 'Bass category updated successfully.');
        }

        return redirect()->back()->with('error', 'Bass category not found.');
    }
}
