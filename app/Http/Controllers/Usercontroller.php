<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class Usercontroller extends Controller
{
    function register()
    {
        return view('register');
    }
    function registration(Request $request)
    {
              

        $user= new User();
        $user->email=$request->email;
        $user->password=\Hash::make($request->password);
        $user->save();
        return $user->password;
    }
    
    function login()
    {
        return view('login');
    }
    
    
    function handlelogin(Request $request)
    {
        $email=$request->email;
           $password=$request->password;
       $cred=array('email'=>$email,'password'=>$password);
              

        if(Auth::attempt($cred))
        {
           return Auth::user()->email;
        }
       else
          return "false login";
        
    }
    
    
    
}
