<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function viewservice()
    {
        $services = Service::all();
        return view('admin.viewtbl.viewService', compact('services')); // Blade file to display the form
    }
    // Show the form (optional, if the form is already displayed elsewhere)
    public function create()
    {
        return view('admin.addservice'); // Blade file to display the form
    }

    // Handle form submission and store data in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'servicename' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Save the service to the database
        Service::create([
            'servicename' => strtoupper($request->input('servicename')), // Convert name to uppercase
            'description' => $request->input('description'),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Service added successfully!');
    }

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
}

