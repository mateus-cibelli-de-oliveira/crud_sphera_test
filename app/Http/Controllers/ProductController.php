<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Str;

class ProductController extends Controller
{

    public function createProduct()
    {
        $companies = Company::all();

        return view('admin.posts.create-product', compact('companies'));
    }

    public function storeProduct(Request $request) 
    {
        
        $product = Product::create($request->all());
        return redirect()->route('admin.posts.show-tables');

    }

    public function showProduct()
    {
        
        $products = Product::all();
        return view('admin.posts.show-tables',  compact('products'));

    }

    public function destroy($id)
    {
        if (!$product = Product::find($id))
        return redirect()->route('admin.posts.show-tables');

        $product->delete();
    
    }

}