<?php

namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;

class PistolsController extends Controller
{
   public function index(){


   $pistols = Pistols::all();
  // dd($users);
   


   return view('pistols.index', Compact('pistol'));

   }

   public function show(Pistols $pistol){

   	
  
  return view('pistols.show' ,compact('pistol'));
   }

    public function create(){


    	return view('pistols.create');
}
     
       public function store(){

      // dd(request()->all());
       	$pistol = new Pistols;
       	$pistol->model_name = request()->model_name;
       	$pistol->gun_history = request()->gun_historye;
       	$pistol->bullet_type = request()->bullet_type;
       	$pistol->bullet_fit_in_magz = request()->bullet_fit_in_magz;
       	$pistol->silencer = request()->silencer;
       	$pistol->safety_trigger = request()->safety_trigger;
       	$pistol->sight = request()->sight;
       	$pistol->weight = request()->weight;
       	$pistol->power = request()->power;
       	$pistol->price_range = request()->price_range;
       	$pistol->description = request()->description;
       	$pistol->user_rating = request()->user_rating;
       	$pistol->user_comment = request()->user_comment;

       	$pistol->save();

       return redirect('/home');


    //	return view('users.create');

}
 
       public function edit(Pistols $pistol){

      // dd(request()->all());

       return view('pistols.edit',compact('pistol'));


    //	return view('users.create');

}
   public function update(Users $user){

    	$pistol = new Pistols;
       	$pistol->model_name = request()->model_name;
       	$pistol->gun_history = request()->gun_historye;
       	$pistol->bullet_type = request()->bullet_type;
       	$pistol->bullet_fit_in_magz = request()->bullet_fit_in_magz;
       	$pistol->silencer = request()->silencer;
       	$pistol->safety_trigger = request()->safety_trigger;
       	$pistol->sight = request()->sight;
       	$pistol->weight = request()->weight;
       	$pistol->power = request()->power;
       	$pistol->price_range = request()->price_range;
       	$pistol->description = request()->description;
       	$pistol->user_rating = request()->user_rating;
       	$pistol->user_comment = request()->user_comment;

        $pistol->save(); 
       	
          return redirect('/pistols/'.$pistol->id);


 

}

public function destroy(Pistols $pistol){

      	$pistol = new Pistols;
       	$pistol->model_name = request()->model_name;
       	$pistol->gun_history = request()->gun_historye;
       	$pistol->bullet_type = request()->bullet_type;
       	$pistol->bullet_fit_in_magz = request()->bullet_fit_in_magz;
       	$pistol->silencer = request()->silencer;
       	$pistol->safety_trigger = request()->safety_trigger;
       	$pistol->sight = request()->sight;
       	$pistol->weight = request()->weight;
       	$pistol->power = request()->power;
       	$pistol->price_range = request()->price_range;
       	$pistol->description = request()->description;
       	$pistol->user_rating = request()->user_rating;
       	$pistol->user_comment = request()->user_comment;
       	$user->save();

   
       	
          return redirect('/pistols/'.$pistol->id);


 

}
}