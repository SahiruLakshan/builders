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
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $measurement = new Measurement($request->all());
            $measurement->save();

            return response()->json([
                'message' => 'Measurement added successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while adding the measurement.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }

    public function getMeasurement($id)
    {
        $measurement = Measurement::find($id);
        if (!$measurement) {
            return response()->json([
                'message' => 'Measurement not found',
                'status' => 404,
            ], 404);
        }
        return response()->json([
            'measurement' => $measurement,
            'status' => 200,
        ]);
    }

    public function updateMeasurement(Request $request, $id)
    {
        $measurement = Measurement::find($id);

        if (!$measurement) {
            return response()->json([
                'message' => 'Measurement not found',
                'status' => 404,
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'unit' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $measurement->update($request->all());

            return response()->json([
                'message' => 'Measurement updated successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while updating the measurement.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }

    public function deleteMeasurement($id)
    {
        $measurement = Measurement::find($id);

        if (!$measurement) {
            return response()->json([
                'message' => 'Measurement not found',
                'status' => 404,
            ], 404);
        }

        try {
            $measurement->delete();

            return response()->json([
                'message' => 'Measurement deleted successfully!',
                'status' => 200,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while deleting the measurement.',
                'error' => $e->getMessage(),
                'status' => 500,
            ], 500);
        }
    }


}
