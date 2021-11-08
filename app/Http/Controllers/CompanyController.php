<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Str;

class CompanyController extends Controller
{

    public function createCompany()
    {
        return view('admin.posts.create-company');
    }

    public function storeCompany(Request $request) 
    {
        $company = $request->all();
        Company::create($company);
    }

    public function showCompany()
    {
        $company = Company::all(); 
        return view('admin.posts.show-tables',  compact('companies'));
        
    }

    public function destroy($id)
    {
        if (!$company = Company::find($id))
        return redirect()->route('admin.posts.show-tables');

        $company->delete();
    }

}