<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){


    return view('login');
}
  public function login(){




  	request()->validate(['name' => 'required', 'password' => 'required']);
     

     $credentials =['name' =>request()->name , 'password'=>request()->password];


        if(Auth::attempt($credentials)){


        return redirect('/');
        }

    return back()->withErrors(['credentials' => 'Incorrect Name or Password']);
}
 public function logout(){

 	Auth::logout();


 	return redirect('/login');


}
}