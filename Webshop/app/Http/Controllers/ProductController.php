<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $dataCategory = Category::all();
        $data = Product::paginate(10);
        return view('admin.product',compact('data','dataCategory'));
    }
}
