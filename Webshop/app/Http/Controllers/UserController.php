<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request)
    {
        $data = User::where('name','like','%'.$request->search.'%')
        ->paginate(10);
        return view('admin.user',compact('data'));
    }
}
