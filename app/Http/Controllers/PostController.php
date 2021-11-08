<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Str;

class PostController extends Controller
{
    public function index() 
    {
    //    $tables = Tables::all();
       return view('show-tables');
    }

    public function createCompany()
    {
        return view('posts.createCompany');
    }

    public function createProduct()
    {
        return view('create-product');
    }

    public function storeCompany(Request $request) 
    {
        $company = $request->all();
        Company::create($company);
    }

    public function storeProduct(Request $request) 
    {
        $product = $request->all();
        Product::create($product);

        $company = Company::where('id')->get()->first();

        $product = $company->products;

        $product->company_id;

    }

    public function showCompany($id)
    {
        if (!$company = Company::find($id)) 
        {
            return redirect()->route('posts.index',  compact('postCompany'));
        } 
    }

    public function showProduct($id)
    {
        if (!$product = Product::find($id)) 
        {
            return redirect()->route('posts.index',  compact('postProduct'));
        } 
    }

    public function destroy($id)
    {
        if (!$product = Product::find($id) or !$company = Company::find($id))
        return redirect()->route('show-tables');

        $product->delete();

        $company->delete();
    }

}