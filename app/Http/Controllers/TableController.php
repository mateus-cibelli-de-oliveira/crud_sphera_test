<?php

namespace App\Http\Controllers;

class TableController extends Controller
{
    public function index() 
    {
    //    $tables = Tables::all();
       return view('admin.posts.show-tables');
    }

}