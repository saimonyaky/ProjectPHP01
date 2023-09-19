<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(Request $request)
    {

        $data = Category::where('name','like','%'.$request->search.'%')
        ->paginate(10);
        // ->appends(['search'=>$request->search]);
        return view('admin.category',compact('data'));
    }
}
