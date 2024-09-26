<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.addproduct');
    }

    public function submitproducts(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Validation Failed.');
        }

        try {
            $product = new Product($request->all());
            $product->save();

            return redirect()->back()->with('success', 'Product Added.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while adding the product.');
        }
    }

    public function products(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', '%' . $query . '%')->orWhere('id', 'like', '%' . $query . '%')->paginate(8);

        if ($request->ajax()) {
            return view('admin.viewtbl.productspagination', compact('products'))->render();
        }

        return view('admin.viewtbl.viewproduct', compact('products'));
    }

    public function getproducts($id)
    {
        $product = Product::find($id);
        return view('admin.updateforms.updateproduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->back()->with('success', 'Product Updated.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted.');
    }
}
