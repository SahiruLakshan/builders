<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function addshop()
    {
        return response()->json([
            'message' => 'show shop add form',
            'status' => 200
        ]);
    }

    public function submitShop(Request $request)
    {
        $validator = Validator::make($request->all(), [       //data validate
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:shops,email',
            'address' => 'required|string|max:500',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'fb_link' => 'nullable|url|max:255',
            'br' => 'required|string|max:255',
            // 'logo_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {                  //validation check
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        try {
            $data = $request->only([
                'name',
                'email',
                'address',
                'district',
                'city',
                'location',
                'start_time',
                'end_time',
                'fb_link',
                'br',
                // 'logo_img'
            ]);

            // if ($request->hasFile('logo_img')) {    //image upload
            //     $file = $request->file('logo_img');
            //     $filename = time() . '_' . $file->getClientOriginalName();
            //     $file->storeAs('public/assets/shop', $filename); 
            //     $data['logo_img'] = $filename;
            // }
            
            

            $shop = new Shop($data); //save shop data
            $shop->save();

            return response()->json([
                'message' => 'Shop submitted successfully!',
                'status' => 200
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while submitting the shop details.',
                'error' => $e->getMessage(),  
                'status' => 500
            ], 500);
        }
    }

    public function updateShop(Request $request, $id)
{
    // Find the shop by ID, return error if not found
    $shop = Shop::find($id);
    if (!$shop) {
        return response()->json([
            'message' => 'Shop not found',
            'status' => 404
        ], 404);
    }

    // Validate the input data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:shops,email,' . $shop->id, // Ignore the current shop's email
        'address' => 'required|string|max:500',
        'district' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'start_time' => 'required|date_format:H:i',
        'end_time' => 'required|date_format:H:i|after:start_time',
        'fb_link' => 'nullable|url|max:255',
        'br' => 'required|string|max:255',
        // 'logo_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Nullable if not changing image
    ]);

    // If validation fails, return error response
    if ($validator->fails()) {
        return response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
            'status' => 422
        ], 422);
    }

    try {
        // Update the shop's data with validated input
        $shop->name = $request->input('name');
        $shop->email = $request->input('email');
        $shop->address = $request->input('address');
        $shop->district = $request->input('district');
        $shop->city = $request->input('city');
        $shop->location = $request->input('location');
        $shop->start_time = $request->input('start_time');
        $shop->end_time = $request->input('end_time');
        $shop->fb_link = $request->input('fb_link');
        $shop->br = $request->input('br');


        // if ($request->hasFile('logo_img')) {
        //     $file = $request->file('logo_img');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $file->storeAs('public/assets/shop', $filename); 
        //     $shop->logo_img = $filename;
        // }

        // Save the updated shop data
        $shop->save();

        // Return success response
        return response()->json([
            'message' => 'Shop updated successfully!',
            'status' => 200
        ]);
    } catch (\Exception $e) {
        // Return error response if something goes wrong
        return response()->json([
            'message' => 'An error occurred while updating the shop details.',
            'error' => $e->getMessage(),
            'status' => 500
        ], 500);
    }
}

}
