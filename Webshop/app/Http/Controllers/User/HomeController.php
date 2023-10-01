<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{    
    function index()
    {
        return view('user.index');
    }
    function gaminggear()
    {
        return view('user.gaminggear');
    }
}
