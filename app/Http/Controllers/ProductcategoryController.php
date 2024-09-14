<?php

namespace App\Http\Controllers;

use App\Models\Productsub;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{
    public function index2()
    {
        return view('admin.addProductSubCatogory');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subcategory = Productsub::create($validatedData);

        return redirect()->back()->with('success', 'Subcategory added successfully!');
    }

    // Update
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subcategory = Productsub::findOrFail($id);
        $subcategory->update($validatedData);

        return redirect()->back()->with('success', 'Subcategory updated successfully!');
    }

    // Delete
    public function destroy($id)
    {
        $subcategory = Productsub::findOrFail($id);
        $subcategory->delete();

        return redirect()->back()->with('success', 'Subcategory deleted successfully!');
    }

}
