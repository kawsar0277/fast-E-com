<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function createSubCategory ()
    {
        return view('admin.subcategory.creat');
    }
}
