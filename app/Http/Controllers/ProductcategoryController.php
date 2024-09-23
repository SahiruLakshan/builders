<?php

namespace App\Http\Controllers;

use App\Models\Productcategory;
use App\Models\Productsub;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{

    public function index()
    {
        return view('admin.addproductcate');
    }

    public function index2()
    {
        return view('admin.addProductSubCatogory');
    }

    public function submitproductcate(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'unit_price' => 'required|numeric',
        ]);

        Productcategory::create([
            'name' => $request->name,
            'unit_price' => $request->unit_price,
        ]);

        return redirect()->back()->with('success', 'Product Category Added.');
    }

    public function getProductCategory($id)
    {

        $productcategory = Productcategory::findOrFail($id);
        return view('admin.updateforms.updateproductcate', compact('productcategory'));
    }

    public function updateProductCategory(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unit_price' => 'required|numeric',
        ]);

        $productcategory = Productcategory::findOrFail($id);

        $productcategory->update([
            'name' => $request->name,
            'unit_price' => $request->unit_price,
        ]);

        return redirect()->back()->with('success', 'Product Category Updated.');
    }

    public function deleteproductcate($id)
    {
        $productcategory = Productcategory::findOrFail($id);

        $productcategory->delete();
        return redirect()->back()->with('success', 'Product Category Deleted.');
    }



    public function categories(Request $request)
    {

        $query = $request->input('query');

        $categories = Productcategory::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.productcatepagination', compact('categories'))->render();
        }

        return view('admin.viewtbl.viewproductcate', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subcategory = Productsub::create($validatedData);

        return redirect()->back()->with('success', 'Subcategory Added!');
    }

    public function subcat(Request $request){
        $query = $request->input('query');

        $subcats = Productsub::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.subcatpagination', compact('subcats'))->render();
        }

        return view('admin.viewtbl.viewsubcat', compact('subcats'));
    }

    public function getsubcategory($id){

        $subcategory = Productsub::findOrFail($id);
        return view('admin.updateforms.updatesubcat', compact('subcategory'));
    }

    // Update
    public function updatesubProductCategory(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subcategory = Productsub::findOrFail($id);
        $subcategory->update($validatedData);

        return redirect()->back()->with('success', 'Subcategory Updated!');
    }

    // Delete
    public function destroy($id)
    {
        $subcategory = Productsub::findOrFail($id);
        $subcategory->delete();

        return redirect()->back()->with('success', 'Subcategory Deleted!');
    }
}
