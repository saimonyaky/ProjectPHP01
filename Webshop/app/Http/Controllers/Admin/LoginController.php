<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class LoginController extends Controller
{
    function index()
    {
        return view('admin.login');
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'passWord'=>'required'
        ]);
        $admin = User::where('name','=','admin','and','email','=',$request->email);
        if($admin && Hash::check($request->passWord, $admin->password)){
            return redirect('indexAdmin');
        }else{
            return back()->with('fail','Email hoặc mật khẩu không chính xác!');
        }
    }
}
