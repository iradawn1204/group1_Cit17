<?php
namespace App\Http\Controllers;
use App\users;
use Illuminate\Http\Request;
class MachinegunsController extends Controller
{
   public function index(){
   $Machineguns = Machineguns::all();
  // dd($users);
   
   return view('Machineguns.index', Compact('Machinegun'));
   }
   public function show(Machineguns $Machinegun){
   	
  
  return view('Machineguns.show' ,compact('Machinegun'));
   }
    public function create(){
    	return view('Machineguns.create');
}
     
       public function store(){
      // dd(request()->all());
       	$Machinegun = new Machineguns;
       	$Machinegun->model_name = request()->model_name;
       	$Machinegun->gun_history = request()->gun_historye;
       	$Machinegun->bullet_type = request()->bullet_type;
       	$Machinegun->magazine = request()->magazine;
       	$Machinegun->weight = request()->weight;
       	$Machinegun->power = request()->power;
       	$Machinegun->price_range = request()->price_range;
       	$Machinegun->description = request()->description;
       	$Machinegun->user_rating = request()->user_rating;
       	$Machinegun->user_comment = request()->user_comment;
       	$Machinegun->save();
       return redirect('/home');
    //	return view('users.create');
}
 
       public function edit(Machineguns $Machinegun){
      // dd(request()->all());
       return view('Machineguns.edit',compact('Machinegun'));
    //	return view('users.create');
}
   public function update(Users $user){
       	$Machinegun = new Machineguns;
       	$Machinegun->model_name = request()->model_name;
       	$Machinegun->gun_history = request()->gun_historye;
       	$Machinegun->bullet_type = request()->bullet_type;
       	$Machinegun->magazine = request()->magazine;
       	$Machinegun->weight = request()->weight;
       	$Machinegun->power = request()->power;
       	$Machinegun->price_range = request()->price_range;
       	$Machinegun->description = request()->description;
       	$Machinegun->user_rating = request()->user_rating;
       	$Machinegun->user_comment = request()->user_comment;
       	$Machinegun->save();
       	
          return redirect('/Machineguns/'.$Machinegun->id);
 
}
public function destroy(Machineguns $Machinegun){
       	$Machinegun = new Machineguns;
       	$Machinegun->model_name = request()->model_name;
       	$Machinegun->gun_history = request()->gun_historye;
       	$Machinegun->bullet_type = request()->bullet_type;
       	$Machinegun->magazine = request()->magazine;
       	$Machinegun->weight = request()->weight;
       	$Machinegun->power = request()->power;
       	$Machinegun->price_range = request()->price_range;
       	$Machinegun->description = request()->description;
       	$Machinegun->user_rating = request()->user_rating;
       	$Machinegun->user_comment = request()->user_comment;
       	$Machinegun->save();
       	



          return redirect('/Machineguns/'.$Machinegun->id);


          public function Machinegun()
          {

          	$validated = request()->validate([
          		'model_name' => 'required',
          		'gun_history' => 'required',
          		'bullet_type' => 'required',
          		'bullet_fit_in_magz' => 'required',
          		'silencer' => 'required',
          		'safety_trigger' => 'required',
          		'sight' => 'required',
          		'weight' => 'required',
          		'power' => 'required',
          		'price_range' => 'required',
          		'description' => 'required',
          		'user_rating' => 'required',
          		'user_comment' => 'required'
          	]);

          if($validated){

       return redirect('/home');}


    return back()->withErrors(['validated' => 'Try it Again']);


    //	return view('users.create');

}

       public function edit(Machineguns  $Machinegun){

      // dd(request()->all());

       return view('Machineguns.edit',compact('Machineguns'));


    //	return view('users.create');

}
   public function update(Machineguns  $Machinegun){


       	$Machinegun = new Machineguns;
       	$Machinegun->model_name = request()->model_name;
       	$Machinegun->gun_history = request()->gun_historye;
       	$Machinegun->bullet_type = request()->bullet_type;
       	$Machinegun->magazine = request()->magazine;
       	$Machinegun->weight = request()->weight;
       	$Machinegun->power = request()->power;
       	$Machinegun->price_range = request()->price_range;
       	$Machinegun->description = request()->description;
       	$Machinegun->user_rating = request()->user_rating;
       	$Machinegun->user_comment = request()->user_comment;
       	$Machinegun->save();
       	



          return redirect('/home');




}

public function destroy(Machineguns  $Machinegun){




     $Machinegun->delete();

     return redirect('/users');




}
}



          }