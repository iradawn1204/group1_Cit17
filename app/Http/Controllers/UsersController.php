<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function index(){


   $users = Users::all();
  // dd($users);
   


   return view('users.index', Compact('users'));

   }

  
      public function show(Users $user){

   	
  
      return view('users.show' ,compact('user'));
   }

    public function create(){


    	return view('users.create');
}
     
       public function store(){

      // dd(request()->all());
       	$user = new Users;
       	$user->name = request()->name;
       	$user->birthdate = request()->birthdate;
       	$user->place = request()->place;
       	$user->save();

       return redirect('/home');


    //	return view('users.create');

}
 
       public function edit(Users $user){

      // dd(request()->all());

       return view('users.edit',compact('user'));


    //	return view('users.create');

}
   public function update(Users $user){

      $user->name = request()->name;
       	$user->birthdate = request()->birthdate;
       	$user->place = request()->place;
       	$user->save();

   
       	
          return redirect('/users/'.$user->id);


 

}

public function destroy(Users $user){

    
   
       	
     $user->delete();

     return redirect('/users');


 

}
}