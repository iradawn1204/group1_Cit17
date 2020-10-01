<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MachinegunsController extends Controller
{
      public function index(){

  DB::table('break_action_shotgun')->get();

    
return view('pumpaction');
}


}
