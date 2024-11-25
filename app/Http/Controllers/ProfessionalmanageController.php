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
        return view('admin\viewtbl\viewProfessionals', compact('professionals'));
    }

    public function create()
    {
        return view('admin/addprofessinals');
    }



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
            'certification_pdf.*' => 'nullable|file|mimes:pdf|max:10240',
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
            Log::info('Processing certification files.', [
                'certification_pdfs' => $request->file('certification_pdf'),
            ]);

            if ($request->has('certification_name')) {
                foreach ($request->certification_name as $index => $certName) {
                    if ($certName) {
                        $certData = [
                            'certification_name' => $certName,
                            'issuing_authority' => $request->issuing_authority[$index] ?? null,
                            'date_issued' => $request->date_issued[$index] ?? null,
                            'expiration_date' => $request->expiration_date[$index] ?? null,
                            'professional_id' => $professional->professional_number, // Link certification to professional
                        ];

                        // Check if the file exists and handle the upload
                        if ($request->hasFile("certification_pdf") && !empty($request->file("certification_pdf")[$index])) {
                            $pdf = $request->file("certification_pdf")[$index];
                            $pdfName = time() . '_' . $pdf->getClientOriginalName();
                            $pdf->move(public_path('assets/professional/certifications'), $pdfName);
                            $certData['certification_pdf'] = 'assets/professional/certifications/' . $pdfName;
                        }

                        // Save the certification data
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

    public function edit($id)
    {
        // Retrieve the professional data and certifications
        $professional = Professionalmanage::with('certifications')->findOrFail($id);

        // Pass data to the edit view
        return view('admin/updateforms/updateprofessinals', compact('professional'));
    }



    public function update(Request $request, $id)
    {
        Log::info('Professional update request received.', ['request_data' => $request->all()]);

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
            'certification_pdf.*' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        try {
            // Find the professional
            $professional = Professionalmanage::findOrFail($id);

            // Update the professional data
            $professional->update($request->except('profile_image', 'certification_name', 'issuing_authority', 'date_issued', 'expiration_date', 'certification_pdf'));

            // Handle Profile Image Update (if new image is uploaded)
            if ($request->hasFile('profile_image')) {
                $file = $request->file('profile_image');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/professional'), $filename);
                $professional->profile_image = 'assets/professional/' . $filename;
            }

            // Handle updating certifications
            if ($request->has('certification_name')) {
                foreach ($request->certification_name as $index => $certName) {
                    if ($certName) {
                        // Find or create new certification record
                        $certData = [
                            'certification_name' => $certName,
                            'issuing_authority' => $request->issuing_authority[$index] ?? null,
                            'date_issued' => $request->date_issued[$index] ?? null,
                            'expiration_date' => $request->expiration_date[$index] ?? null,
                        ];

                        // Check if the file exists and handle the upload
                        if ($request->hasFile("certification_pdf") && !empty($request->file("certification_pdf")[$index])) {
                            $pdf = $request->file("certification_pdf")[$index];
                            $pdfName = time() . '_' . $pdf->getClientOriginalName();
                            $pdf->move(public_path('assets/professional/certifications'), $pdfName);
                            $certData['certification_pdf'] = 'assets/professional/certifications/' . $pdfName;
                        }

                        // Update or create the certification
                        $professional->certifications()->updateOrCreate(
                            ['id' => $request->certification_id[$index] ?? null],
                            $certData
                        );
                    }
                }
            }

            Log::info('Professional and certifications updated successfully.');

            return redirect()->route('professionals.index')->with('success', 'Professional updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating professional data.', ['error_message' => $e->getMessage()]);
            return redirect()->route('professionals.index')->with('error', 'An error occurred while updating the professional.');
        }
    }




    public function destroy($id)
    {
        try {
            // Retrieve the professional
            $professional = Professionalmanage::findOrFail($id);

            // Delete certifications' PDFs and database records
            foreach ($professional->certifications as $cert) {
                if (file_exists(public_path($cert->certification_pdf))) {
                    unlink(public_path($cert->certification_pdf));
                }
                $cert->delete();
            }

            // Delete the profile image file
            if (file_exists(public_path($professional->profile_image))) {
                unlink(public_path($professional->profile_image));
            }

            // Delete the professional
            $professional->delete();

            Log::info('Professional and certifications deleted successfully.');

            return redirect()->route('professionals.index')->with('success', 'Professional deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting professional data.', ['error_message' => $e->getMessage()]);
            return redirect()->route('professionals.index')->with('error', 'An error occurred while deleting the professional.');
        }
    }


















}
