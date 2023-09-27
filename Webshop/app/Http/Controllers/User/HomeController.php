<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function login(){
        return view('user.login');
    }
    
    public function registration(){
        return view('registration');
    }
    
    function index()
    {
        return view('user.index');
    }
}
