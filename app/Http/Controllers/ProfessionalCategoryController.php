<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalCategory;
use Illuminate\Http\Request;

class ProfessionalCategoryController extends Controller
{
    // Display all categories
    public function index()
    {
        $categories = ProfessionalCategory::all();
        return view('admin/viewtbl/viewprofessionalcategory', compact('categories'));
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('categories.create');
    }

    // Store a newly created category in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        ProfessionalCategory::create($request->only('name', 'description'));
        return redirect('/categories')->with('success', 'Category added successfully!');
    }

    // Show the form for editing the specified category
    public function edit($id)
    {
        $category = ProfessionalCategory::findOrFail($id);
        return view('admin\updateforms\updateprofessinalCategory', compact('category'));
    }

    // Update the specified category in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = ProfessionalCategory::findOrFail($id);
        $category->update($request->only('name', 'description'));
        return redirect('/categories')->with('success', 'Category updated successfully!');
    }

    // Remove the specified category from storage
    public function destroy($id)
    {
        $category = ProfessionalCategory::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category deleted successfully!');
    }
}
