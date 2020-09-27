<?php

namespace App\Http\Controllers;
use App\mguns;
use Illuminate\Http\Request;

class mgunsController extends Controller
{
   public function index(){


   $mguns = mguns::all();
  // dd($mguns);
   


   return view('mguns.index', Compact('mguns'));

   }

   public function show(mguns $mgun){

   	
  
  return view('mguns.show' ,compact('mgun'));
   }

    public function create(){


    	return view('mguns.create');
}
     
       public function store(){

      // dd(request()->all());
       	$mgun = new mguns;
       	$mgun->name = request()->name;
       	$mgun->ID = request()->ID;
       	$mgun->save();

       return redirect('/home');


    //	return view('mguns.create');

}
 
       public function edit(mguns $mgun){

      // dd(request()->all());

       return view('mguns.edit',compact('mgun'));


    //	return view('mguns.create');

}
   public function update(mguns $mgun){

      $mgun->name = request()->name;
       	$mgun->ID = request()->ID;
       	$mgun->save();

   
       	
          return redirect('/mguns/'.$mgun->id);


 

}

public function destroy(mguns $mgun){

      $mgun->name = request()->name;
       	$mgun->ID = request()->ID;
       	$mgun->save();

   
       	
          return redirect('/mguns/'.$mgun->id);


 

}
}