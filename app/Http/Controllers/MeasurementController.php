<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class MeasurementController extends Controller
{

    public function index()
    {
        return view('admin.addmeasurement');
    }

    public function addMeasurement(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'unit' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation Failed');
        }

        try {
            $measurement = new Measurement($request->all());
            $measurement->save();

            return redirect()->back()->with('success','Measurement Added.');
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the measurement.');
        }
    }

    public function measurements(Request $request)
    {
        $query = $request->input('query');

        $measurement = Measurement::where('unit', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.measurementpagination', compact('measurement'))->render();
        }

        return view('admin.viewtbl.viewmeasurment', compact('measurement'));
    }

    public function getMeasurement($id)
    {
        $measurement = Measurement::find($id);
        if (!$measurement) {
            return redirect()->back()->with('warning', 'Measurement is not found');
        }
        return view('admin.updateforms.updatemeasument', compact('measurement'));
    }

    public function updateMeasurement(Request $request, $id)
    {
        $measurement = Measurement::find($id);

        if (!$measurement) {
            return redirect()->back()->with('warning', 'Measurement is not found.');
        }

        $validator = Validator::make($request->all(), [
            'unit' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation Failed.');
        }

        try {
            $measurement->update($request->all());

            return redirect()->back()->with('success', 'Measurement Updated.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the measurement.');
        }
    }

    public function deleteMeasurement($id)
    {
        $measurement = Measurement::find($id);

        if (!$measurement) {
            return redirect()->back()->with('warning', 'Measurement is not found.');
        }

        try {
            $measurement->delete();

            return redirect()->back()->with('success', 'Measurement Deleted.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the measurement.');
        }
    }


}
