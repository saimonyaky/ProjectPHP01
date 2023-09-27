<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function login(){
        return view('user.login');
    }
    
    public function register(){
        return view('user.register');
    }
    
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:user',
            'password'=>'required|min:5|max12'
        ]);
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $res = $user->save();
        if($res){
            return back()->with('success','You have register successfuly');
        }else{
            return back()->with('fail','Somthing wrong');
        }
    }
      
    function index()
    {
        return view('user.index');
    }
}
