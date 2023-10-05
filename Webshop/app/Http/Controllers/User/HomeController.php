<?php

namespace App\Http\Controllers\User;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{    
    function index()
    {
        $data = Product::all();
        $dataPc = Product::all()->where('category_id',68)->take(4);
        $dataGear = Product::all()->where('category_id',69)->take(4);
        $dataCs = Product::all()->where('category_id',67)->take(4);
        $dataTop = Product::all()->take(8);
        return view('user.index',compact('data','dataTop','dataPc','dataGear','dataCs'));
    }
    function gaminggear()
    {
        $dataTop = Product::all()->where('category_id',69)->take(3);
        $data = Product::all()->where('category_id',69);
        return view('user.gaminggear',compact('data','dataTop'));
    }
    function contact()
    {
        $data = Product::all();
        return view('user.contact',compact('data'));
    }
    function pccomponent()
    {
        $dataTop = Product::all()->where('category_id',68)->take(3);
        $data = Product::all()->where('category_id',68);
        return view('user.pccomponent',compact('data','dataTop'));
    }
    function console()
    {
        $dataTop = Product::all()->where('category_id',67)->take(3);
        $data = Product::all()->where('category_id',67);
        return view('user.console',compact('data','dataTop'));
    }
    function about()
    {
        $data = Product::all();
        return view('user.about',compact('data'));
    }
    function offer()
    {
        $dataPc = Product::all()->where('category_id',68)->take(4);
        $dataGear = Product::all()->where('category_id',69)->take(4);
        $dataCs = Product::all()->where('category_id',67)->take(4);
        $data = Product::all();
        return view('user.offer',compact('data','dataPc','dataGear','dataCs'));
    }
    function faqs()
    {
        $data = Product::all();
        return view('user.faqs',compact('data'));
    }
    function single($id)
    {
        $product = Product::find($id);
        return view('user.single',compact('product'));
    }
}
