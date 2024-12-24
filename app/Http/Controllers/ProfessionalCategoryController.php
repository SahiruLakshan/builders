<?php

namespace App\Http\Controllers;

use App\Models\ProfessionalCategory;
use App\Models\Professional;
use App\Models\ProfessionCategory;
use Illuminate\Http\Request;

class ProfessionalCategoryController extends Controller
{
    public function index()
    {
        return view('admin.addprofessionalsCategory');
    }

    public function addprofessionals(Request $request)
    {
        $prof_cate = new ProfessionCategory();
        $prof_cate->name = $request->input('name');
        $prof_cate->description = $request->input('description');
        $prof_cate->save();

        return redirect()->back()->with('success', 'Profession Category Added Successfully');
    }

    // public function view()
    // {
    //     $prof_cate = ProfessionCategory::all();
    //     return view('admin.viewtbl.viewprofessionalcategory', compact('prof_cate'));
    // }
    public function view()
    {
        $professionalCategories = ProfessionCategory::paginate(10); // Fetch 10 items per page
        return view('admin.viewtbl.viewprofessionalcategory', compact('professionalCategories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $professionalCategory = ProfessionCategory::findOrFail($id);
        $professionalCategory->name = $request->name;
        $professionalCategory->description = $request->description;
        $professionalCategory->save();

        return redirect()->route('view.profession.categories')->with('success', 'Category updated successfully!');
    }
    // Display all categories
    // public function index()
    // {
    //     $prof_cate = ProfessionalCategory::all();
    //     return view('admin/viewtbl/viewprofessionalcategory', compact('prof_cate'));
    // }

    // Show the form for creating a new category
    // public function create()
    // {
    //     return view('categories.create');
    // }

    // Store a newly created category in storage
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     ProfessionalCategory::create($request->only('name', 'description'));
    //     return redirect('/categories')->with('success', 'Category added successfully!');
    // }

    // Show the form for editing the specified category
    public function edit($id)
    {
        $category = ProfessionalCategory::findOrFail($id);
        return view('admin.updateforms.updateprofessinalCategory', compact('category'));
    }

    // // Update the specified category in storage
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //     ]);

    //     $category = ProfessionalCategory::findOrFail($id);
    //     $category->update($request->only('name', 'description'));
    //     return redirect('/categories')->with('success', 'Category updated successfully!');
    // }

    // // Remove the specified category from storage
    // public function destroy($id)
    // {
    //     $category = ProfessionalCategory::findOrFail($id);
    //     $category->delete();
    //     return redirect('/categories')->with('success', 'Category deleted successfully!');
    // }
    // public function edit($id)
    // {
    //     $professionalCategory = ProfessionCategory::findOrFail($id);
    //     return view('admin.updateprofessinalCategory', compact('professionalCategory'));
    // }


}
