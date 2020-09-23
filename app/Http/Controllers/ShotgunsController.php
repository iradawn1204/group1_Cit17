<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class ShotgunsController extends Controller
{
   public function index(){

  DB::table('shotguns')->get();

    
return view('shotguns');

     

   }
}
