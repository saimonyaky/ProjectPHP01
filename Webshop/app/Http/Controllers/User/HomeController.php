<?php

namespace App\Http\Controllers\User;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{    
    function index()
    {
        $product = Product::all();
        return view('user.index');
    }
    function gaminggear()
    {
        return view('user.gaminggear');
    }
    function contact()
    {
        return view('user.contact');
    }
    function pccomponent()
    {
        return view('user.pccomponent');
    }
    function console()
    {
        return view('user.console');
    }
    function about()
    {
        return view('user.about');
    }
    function offer()
    {
        return view('user.offer');
    }
    function faqs()
    {
        return view('user.faqs');
    }
    function single_gaminggear()
    {
        return view('user.single_gaminggear');
    }
    function single_pc()
    {
        return view('user.single_pc');
    }
    function single()
    {
        return view('user.single');
    }
}
