<?php

namespace App\Http\Controllers;
use App\Shotgun;

use Illuminate\Http\Request;

class ShotgunsController extends Controller
{
  
   public function index(){


   $shotguns = Shotgun::all();


 
   


   return view('shotguns.index', Compact('shotguns'));

   }

  
      public function show(Shotgun $shotguns){

   	
  
      return view('shotgun.show' ,compact('shotgun'));
   }

   


}

