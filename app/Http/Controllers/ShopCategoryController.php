<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCategory;
use Illuminate\Support\Facades\Validator;

class ShopCategoryController extends Controller
{

    public function index(){
        return view('admin.addshopcatogory');
    }
    
    public function shopecate(Request $request){
        $query = $request->input('query');

        $categories = ShopCategory::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.shopcatepagination', compact('categories'))->render();
        }

        return view('admin.viewtbl.viewshopcategory', compact('categories'));
    }

    public function insertShopCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation failed.');
        }

        try {
            $shopCategory = new ShopCategory($request->all());
            $shopCategory->save();

            return redirect()->back()->with('success', 'Shop Category Added.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the Shop Category.');
        }
    }

    public function getShopCategory($id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return redirect()->back()->with('warning', 'Shop Category is not found.');
        }

        return view('admin.updateforms.updateshopcategory', compact('shopCategory'));
    }

    public function updateShopCategory(Request $request, $id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return redirect()->back()->with('warning', 'Shop Category is not found.');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation failed.');
        }

        try {
            $shopCategory->update($request->all());

            return redirect()->back()->with('success', 'Shop Category Updated.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the shop category.');
        }
    }

    public function deleteShopCategory($id)
    {
        $shopCategory = ShopCategory::find($id);

        if (!$shopCategory) {
            return redirect()->back()->with('warning', 'Shop category is not found.');
        }

        try {
            $shopCategory->delete();

            return redirect()->back()->with('success', 'Shop Category Deleted.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the Shop category.');
        }
    }
}
