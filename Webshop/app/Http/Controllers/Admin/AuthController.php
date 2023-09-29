<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;

class AuthController extends Controller
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
        ],[
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'passWord.required'=>'Mật khẩu không được để trống'
        ]);
        $admin = User::where('name','=','admin')->where('email','=',$request->email)->first();
        if($admin && Hash::check($request->passWord, $admin->password)){
            $request->session()->put('logged',$admin->id);
            return redirect()->route('indexAdmin');
        }else{
            return back()->with('fail','Email hoặc mật khẩu không chính xác!');
        }
    }
    function logout()
    {
        if(session()->has('logged')){
            session()->pull('logged');
            return redirect()->route('adminLogin');
        }
    }
}
