<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function viewservice()
    {
        // $services = Service::all();
        $services = Service::paginate(10);
        return view('admin.viewtbl.viewService', compact('services')); // Blade file to display the form
    }
    // Show the form (optional, if the form is already displayed elsewhere)
    public function create()
    {
        return view('admin.addservice'); // Blade file to display the form
    }
    public function index(Request $request)
    {
        $query = $request->get('query');
        $services = Service::where('servicename', 'LIKE', "%$query%")
            ->orWhere('id', 'LIKE', "%$query%")
            ->paginate(10);

        if ($request->ajax()) {
            return view('admin.services.pagination', compact('services'))->render();
        }

        return view('admin.services.index', compact('services'));
    }


    // // Handle form submission and store data in the database
    // public function store(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'servicename' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     // Save the service to the database
    //     Service::create([
    //         'servicename' => strtoupper($request->input('servicename')), // Convert name to uppercase
    //         'description' => $request->input('description'),
    //     ]);

    //     // Redirect with a success message
    //     return redirect()->back()->with('success', 'Service added successfully!');
    // }

    // // Show the update form with existing data
    // public function edit($id)
    // {
    //     $service = Service::findOrFail($id);
    //     return view('admin.services.edit', compact('service'));
    // }

    // // Handle the update request
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'servicename' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     $service = Service::findOrFail($id);
    //     $service->update([
    //         'servicename' => strtoupper($request->servicename),
    //         'description' => $request->description,
    //     ]);

    //     return redirect()->route('service.index')->with('success', 'Service updated successfully.');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'servicename' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     Service::create([
    //         'servicename' => strtoupper($request->input('servicename')),
    //         'description' => $request->input('description'),
    //         'status' => 1,
    //         'updated_by' => auth()->id(), // Save the user ID of the creator
    //     ]);

    //     return redirect()->back()->with('success', 'Service added successfully!');
    // }
    // public function store(Request $request)
    // {
    //     // Validate the input
    //     $request->validate([
    //         'servicename' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     // Check if a service with the same name already exists
    //     $existingService = Service::where('servicename', strtoupper($request->input('servicename')))
    //         ->first();

    //     if ($existingService) {
    //         // If the service already exists, return an alert message
    //         return redirect()->back()->with('error', 'Service with this name already exists!');
    //     }

    //     // Create the new service
    //     Service::create([
    //         'servicename' => strtoupper($request->input('servicename')),
    //         'description' => $request->input('description'),
    //         'status' => 1,
    //         'updated_by' => auth()->id(), // Save the user ID of the creator
    //     ]);

    //     // Redirect with success message
    //     return redirect()->back()->with('success', 'Service added successfully!');
    // }
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'servicename' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Check if the service with the same name already exists
        $existingService = Service::where('servicename', strtoupper($request->input('servicename')))->first();

        if ($existingService) {
            // If service exists, show an error
            return redirect()->back()->with('error', 'Service with this name already exists!');
        }

        // Create the new service
        Service::create([
            'servicename' => strtoupper($request->input('servicename')),
            'description' => $request->input('description'),
            'status' => 1,
            'updated_by' => auth()->id(), // Save the user ID of the creator
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Service added successfully!');
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'servicename' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'servicename' => strtoupper($request->input('servicename')),
            'description' => $request->input('description'),
            'updated_by' => auth()->id(), // Save the user ID of the editor
        ]);

        return redirect()->route('admin.updateforms.updateService')->with('success', 'Service updated successfully.');
    }
    public function delete($id)
    {
        $service = Service::findOrFail($id);
        $service->update(['status' => 0, 'updated_by' => auth()->id()]); // Soft delete and log editor

        return redirect()->route('service.index')->with('success', 'Service deleted successfully.');
    }


}

