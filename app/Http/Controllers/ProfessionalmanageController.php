<?php

namespace App\Http\Controllers;

use App\Models\Professionalmanage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProfessionalmanageController extends Controller
{
    public function index()
    {
        $professionals = Professionalmanage::all();
        return view('resources\views\admin\addprofessinals', compact('professionals'));
    }

    public function create()
    {
        return view('admin/addprofessinals');
    }

    // public function store(Request $request)
    // {
    //     Log::info('Professional creation request received.', ['request_data' => $request->all()]);

    //     $request->validate([
    //         'professional_number' => 'required|unique:professionals',
    //         'name' => 'required',
    //         'email' => 'nullable|email',
    //         'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'phone' => 'nullable|string',
    //         'address' => 'nullable|string',
    //         'district' => 'nullable|string',
    //         'city' => 'nullable|string',
    //         'zip' => 'nullable|string',
    //         'dob' => 'nullable|date',
    //         'linkedin' => 'nullable|url',
    //         'job_title' => 'nullable|string',
    //         'experience_level' => 'nullable|string',
    //         'years_of_experience' => 'nullable|integer',
    //         'skills' => 'nullable|string',
    //         'license_number' => 'nullable|string'
    //     ]);

    //     $professional = new Professionalmanage($request->except('profile_image'));

    //     // Handle Profile Image Upload
    //     if ($request->hasFile('profile_image')) {
    //         $file = $request->file('profile_image');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('assets/professional'), $filename); // Save in 'assets/professional' directory
    //         $professional->profile_image = 'assets/professional/' . $filename;
    //     }

    //     $professional->save();

    //     // Handle Certifications
    //     if ($request->has('certificationName')) {
    //         $certifications = $request->certificationName;
    //         $issuingAuthorities = $request->issuingAuthority;
    //         $datesIssued = $request->dateIssued;
    //         $expirationDates = $request->expirationDate;
    //         $certificationPdfs = $request->file('certificationPdf');

    //         foreach ($certifications as $index => $certName) {
    //             if ($certName) { // Ensure certification name is provided
    //                 $certData = [
    //                     'certification_name' => $certName,
    //                     'issuing_authority' => $issuingAuthorities[$index] ?? null,
    //                     'date_issued' => $datesIssued[$index] ?? null,
    //                     'expiration_date' => $expirationDates[$index] ?? null,
    //                 ];

    //                 // Handle Certification PDF Upload
    //                 if (isset($certificationPdfs[$index])) {
    //                     $pdf = $certificationPdfs[$index];
    //                     $pdfName = time() . '_' . $pdf->getClientOriginalName();
    //                     $pdf->move(public_path('assets/professional/certifications'), $pdfName); // Save in 'assets/professional/certifications' directory
    //                     $certData['certification_pdf'] = 'assets/professional/certifications/' . $pdfName;
    //                 }

    //                 $professional->certifications()->create($certData);
    //             }
    //         }
    //     }
    //     // return $professional;
    //     return redirect()->route('professionals.index')->with('success', 'Professional added successfully.');
    // }

    public function store(Request $request)
{
    Log::info('Professional creation request received.', ['request_data' => $request->all()]);

    // Validate the incoming request
    $request->validate([
        'professional_number' => 'required',
        'name' => 'required',
        'email' => 'nullable|email',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'phone' => 'nullable|string',
        'address' => 'nullable|string',
        'district' => 'nullable|string',
        'city' => 'nullable|string',
        'zip' => 'nullable|string',
        'dob' => 'nullable|date',
        'linkedin' => 'nullable|url',
        'job_title' => 'nullable|string',
        'experience_level' => 'nullable|string',
        'years_of_experience' => 'nullable|integer',
        'skills' => 'nullable|string',
        'license_number' => 'nullable|string',
        'certification_name' => 'nullable|array',
        'certification_name.*' => 'nullable|string',
        'issuing_authority.*' => 'nullable|string',
        'date_issued.*' => 'nullable|date',
        'expiration_date.*' => 'nullable|date',
        'certification_pdf.*' => 'nullable|file|mimes:pdf|max:2048',
    ]);

    try {
        // Create a new Professionalmanage instance
        $professional = new Professionalmanage($request->except('profile_image', 'certification_name', 'issuing_authority', 'date_issued', 'expiration_date', 'certification_pdf'));

        // Handle Profile Image Upload
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/professional'), $filename);
            $professional->profile_image = 'assets/professional/' . $filename;
        }

        // Save the professional data
        $professional->save();
        Log::info('Professional data saved successfully.', ['professional_data' => $professional->toArray()]);

        // Handle Certifications
        if ($request->has('certification_name')) {
            foreach ($request->certification_name as $index => $certName) {
                if ($certName) { // Ensure certification name is provided
                    $certData = [
                        'certification_name' => $certName,
                        'issuing_authority' => $request->issuing_authority[$index] ?? null,
                        'date_issued' => $request->date_issued[$index] ?? null,
                        'expiration_date' => $request->expiration_date[$index] ?? null,
                    ];

                    // Handle Certification PDF Upload
                    if ($request->hasFile("certification_pdf.{$index}")) {
                        $pdf = $request->file("certification_pdf.{$index}");
                        $pdfName = time() . '_' . $pdf->getClientOriginalName();
                        $pdf->move(public_path('assets/professional/certifications'), $pdfName);
                        $certData['certification_pdf'] = 'assets/professional/certifications/' . $pdfName;
                    }

                    // Save certification data
                    $professional->certifications()->create($certData);
                    Log::info('Certification data saved successfully.', ['certification_data' => $certData]);
                }
            }
        }

        Log::info('All data saved successfully for the professional.');
        return redirect()->route('professionals.index')->with('success', 'Professional added successfully.');
    } catch (\Exception $e) {
        Log::error('Error saving professional data.', ['error_message' => $e->getMessage()]);
        return redirect()->route('professionals.index')->with('error', 'An error occurred while adding the professional.');
    }
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'professional_number' => 'required|unique:professionals,professional_number,' . $id,
            'name' => 'required',
            'email' => 'nullable|email',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'district' => 'nullable|string',
            'city' => 'nullable|string',
            'zip' => 'nullable|string',
            'dob' => 'nullable|date',
            'linkedin' => 'nullable|url',
            'job_title' => 'nullable|string',
            'experience_level' => 'nullable|string',
            'years_of_experience' => 'nullable|integer',
            'skills' => 'nullable|string',
            'license_number' => 'nullable|string',

            'certificationName.*' => 'nullable|string|max:255',
            'issuingAuthority.*' => 'nullable|string|max:255',
            'dateIssued.*' => 'nullable|date',
            'expirationDate.*' => 'nullable|date|after_or_equal:dateIssued.*',
            'certificationPdf.*' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $professional = Professional::findOrFail($id);
        $professional->fill($request->except('profile_image'));

        // Handle Profile Image Upload
        if ($request->hasFile('profile_image')) {
            // Delete old profile image if exists
            if ($professional->profile_image && file_exists(public_path($professional->profile_image))) {
                unlink(public_path($professional->profile_image));
            }

            // Save new profile image
            $file = $request->file('profile_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/professional'), $filename);
            $professional->profile_image = 'assets/professional/' . $filename;
        }

        // Set the edited_by and edited_at fields
        $professional->edited_by = auth()->id(); // assuming user authentication is in place
        $professional->edited_at = now();

        // Handle Certifications
        if ($request->has('certificationName')) {
            $certifications = $request->certificationName;
            $issuingAuthorities = $request->issuingAuthority;
            $datesIssued = $request->dateIssued;
            $expirationDates = $request->expirationDate;
            $certificationPdfs = $request->file('certificationPdf');

            foreach ($certifications as $index => $certName) {
                if ($certName) { // Ensure certification name is provided
                    $certData = [
                        'certification_name' => $certName,
                        'issuing_authority' => $issuingAuthorities[$index] ?? null,
                        'date_issued' => $datesIssued[$index] ?? null,
                        'expiration_date' => $expirationDates[$index] ?? null,
                    ];

                    // Handle Certification PDF Upload
                    if (isset($certificationPdfs[$index])) {
                        $pdf = $certificationPdfs[$index];
                        $pdfName = time() . '_' . $pdf->getClientOriginalName();
                        $pdf->move(public_path('assets/professional/certifications'), $pdfName);
                        $certData['certification_pdf'] = 'assets/professional/certifications/' . $pdfName;
                    }

                    $professional->certifications()->create($certData);
                }
            }
        }

        $professional->save();

        return redirect()->route('professionals.index')->with('success', 'Professional updated successfully.');
    }



    public function destroy($id)
    {
        $professional = Professional::findOrFail($id);
        if ($professional->profile_image) {
            Storage::delete('public/' . $professional->profile_image);
        }
        $professional->delete();

        return redirect()->route('professionals.index')->with('success', 'Professional deleted successfully.');
    }


















}
