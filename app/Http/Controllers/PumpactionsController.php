<?php

namespace App\Http\Controllers;
use App\Pump_action;

use Illuminate\Http\Request;

class PumpactionsController extends Controller
{
    public function index(){


   $pump_actions = Pump_Action::all();
  // dd($pump_actions);



   return view('pumpactions.index', Compact('pump_actions'));

   }


  public function show(Pump_Action  $pump_action){

   	
  
      return view('pumpactions.show' ,compact('pump_action'));
   }

    public function create(){


    	return view('pumpactions.create');
}
     
     public function store(){

       //dd(request()->all());
            $pump_action->text('model_name');
            $pump_action->text('gun_history');
            $pump_action->text('barrel_type');
            $pump_action->text('fore_end');
            $pump_action->text('bullet');
            $pump_action->text('weight');
            $pump_action->text('power');
            $pump_action->text('description');
            $pump_action->text('price');
            $pump_action->text('users_rating');
            $pump_action->text('user_comment');
         	$pump_action->save();

       return redirect('/home');


    //	return view('users.create');

}
 
       public function edit(Pump_Action  $pump_action){

      // dd(request()->all());

       return view('pumpactions.edit',compact('pump_action'));


    //	return view('users.create');

}
   public function update(Pump_Action  $pump_action){

      
       	 $pump_action->model_name = request()->model_name;
            $pump_action->gun_history = request()->gun_history;
            $pump_action->barrel_type = request()->barrel_type;
            $pump_action->fore_end = request()->fore_end;
            $pump_action->bullet = request()->bullet;
            $pump_action->weight = request()->weight;
            $pump_action->power = request()->power;
            $pump_action->description= request()->description;
            $pump_action->price = request()->price;
            $pump_action->users_rating = request()->users_rating;
            $pump_action->user_comment = request()->user_comment;
         	$pump_action->save();

   
       	
          return redirect('/home');


 

}

public function destroy(Pump_Action  $pump_action){

    
   
       	
     $pump_actions->delete();

     return redirect('/users');


 

}
}
