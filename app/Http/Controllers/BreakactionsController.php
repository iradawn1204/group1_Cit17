<?php

namespace App\Http\Controllers;
use App\BreakActions;
use Illuminate\Http\Request;

class BreakactionsController extends Controller
{
       public function index(){

   $break_actions = BreakActions::all();

    
return view('breakactions.index', Compact('break_actions'));
}
 public function show(BreakActions  $break_action){

   	
  
      return view('breakactions.show' ,compact('break_action'));
   }

    public function create(){


    	return view('breakactions.create');
}
     
     public function store(){

       //dd(request()->all());
            $break_action->text('model_name');
            $break_action->text('gun_history');
            $break_action->text('barrel_type');
            $break_action->text('double_barrel_type');
            $break_action->text('bullet');
            $break_action->text('weight');
            $break_action->text('power');
            $break_action->text('description');
            $break_action->text('price');
            $break_action->text('users_rating');
            $break_action->text('user_comment');
         	$break_action->save();


       return redirect('/home');


    //	return view('users.create');

}
 
       public function edit(BreakActions  $break_action){

      // dd(request()->all());

       return view('breakactions.edit',compact('break_action'));


    //	return view('users.create');

}
   public function update(BreakActions  $break_action){

      
       	 $pump_action->model_name = request()->model_name;
            $break_action->gun_history = request()->gun_history;
            $break_action->barrel_type = request()->barrel_type;
            $break_action->double_barrel_type = request()->double_barrel_type;
            $break_action->bullet = request()->bullet;
            $break_action->weight = request()->weight;
            $break_action->power = request()->power;
            $break_action->description= request()->description;
            $break_action->price = request()->price;
            $break_action->user_rating = request()->user_rating;
            $break_action->user_comment = request()->user_comment;
         	$break_action->save();

   
       	
          return redirect('/home');


 

}

public function destroy(Pump_Action  $pump_action){

    
   
       	
     $pump_actions->delete();

     return redirect('/users');


 

}
}