<?php

namespace App\Http\Controllers;
use Auth;
use App\Users;
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

        $validated = request()->validate(['name' => 'required|unique:users',
        'password'=> 'required',
        'birthdate' => 'required',
      	'place '=> 'required'

  ]);

        dd($validated);
       return redirect('/login');


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