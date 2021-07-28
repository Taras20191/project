<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function allData()
    {
        dd(Categories::all());

    }

    public function allCategory()
    {
        return view('category', ['category' =>Categories::all()]);
    }

}
