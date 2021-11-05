<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\Str;

class OneToOneController extends Controller
{

    public function OneToOne(Request $request)
    {

        $company = Company::create($request->all());
        return $company->name;

        $product = $company->id;
        return $product->company_id;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function OneToOneInsert(Request $request)
    {

       $dataForm = ['name', 'description'];

       $company = Company::create($dataForm);

       $product = Product::create($request->all());
       $dataForm['company_id'] = $company->id;

       return redirect()->route('tables-end');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (!$post = Product::find($id))
        return redirect()->route('tables-end');

        $post->delete();

    }
}
