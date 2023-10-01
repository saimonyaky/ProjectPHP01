<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{    
    function index()
    {
<<<<<<< Updated upstream
        return view('user.index');
=======
        $dataPc = Product::all()->where('category_id',68)->take(4);
        $dataGear = Product::all()->where('category_id',69)->take(4);
        $dataCs = Product::all()->where('category_id',67)->take(4);
        $dataTop = Product::all()->take(8);
        return view('user.index',compact('dataTop','dataPc','dataGear','dataCs'));
>>>>>>> Stashed changes
    }
    function gaminggear()
    {
        $dataTop = Product::all()->where('category_id',69)->take(3);
        $data = Product::all()->where('category_id',69);
        return view('user.gaminggear',compact('data','dataTop'));
    }
<<<<<<< Updated upstream
=======
    function contact()
    {
        return view('user.contact');
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
>>>>>>> Stashed changes
}
