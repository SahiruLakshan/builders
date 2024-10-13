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
        $request->validate([
            'service_name' => 'required|string|max:255',
            'service_description' => 'required|string|max:1000', // Add rules based on your needs
        ]);
        
        // Create the service
        Service::create([
            'service_name' => strtoupper($request->input('service_name')), // Convert name to uppercase
            'service_description' => $request->input('service_description'),
        ]);

        // Redirect with a success message
        return redirect()->back()->with('success', 'Service added successfully!');


        
    }
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.updateforms.updateService', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'service_description' => 'required',
        ]);

        $service = Service::findOrFail($id);
        $service->update([
            'service_name' => $request->service_name,
            'service_description' => $request->service_description,
        ]);

        return redirect()->route('viewservice')->with('success', 'Service updated successfully.');
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->back()->with('success', 'Service deleted successfully.');
    }
    public function sendtoindex()
    {
        $services = Service::all();
        return view('webpages.index', compact('services')); // Blade file to display the form
    }
}

