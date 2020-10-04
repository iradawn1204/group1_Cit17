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
      $validated = request()->validate(['model_name' => 'required|unique:pump_action_shotgun',
        'gun_history'=> 'required',
        'barrel_type' => 'required',
        'fore_end'=> 'required',
        'bullet'=> 'required',
        'weight'=> 'required',
        'power'=> 'required',
        'description'=> 'required',
        'price'=> 'required',
        'users_rating' => 'required',
         'user_comment'=> 'required'

  ]);
 

if($validated){
         
       return redirect('/home');}
         

    return back()->withErrors(['validated' => 'Try it Again']);


}




 
       public function edit(Pump_Action  $validated){

      // dd(request()->all());

       return view('pumpactions.edit',compact('validated'));


    //	return view('users.create');

}
   public function update(Pump_Action  $validated){

      
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

