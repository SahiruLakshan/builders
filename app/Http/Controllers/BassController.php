<?php

namespace App\Http\Controllers;
use App\Models\District;
use App\Models\City;
use Illuminate\Http\Request;
use App\Models\BassCategory;
use App\Models\Bass;

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
                'district_id' => 'required|exists:districts,dis_id',
                'city_id' => 'required|exists:cities,ds_id',
                'zip' => 'nullable|string|max:10',
                'dob' => 'nullable|date',
                'linkedin' => 'nullable|string|max:255',
                'jobTitle' => 'required|string|max:255',
                'experienceLevel' => 'required|string|max:50',
                'yearsOfExperience' => 'nullable|integer',
                'skills' => 'nullable|string',
                'specialization' => 'nullable|array',
                'workingArea' => 'nullable|array',
                'certificationDetails' => 'nullable|array',
                'certifications' => 'nullable|array'
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
                'specialization' => json_encode($validated['specialization']),
                'workingArea' => json_encode($validated['workingArea']),
                'certification_details' => json_encode($certificationDetails),
                'certifications' => json_encode($certificationFiles)
            ]);

            return redirect()->back()->with('success', 'Bass added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }

}
