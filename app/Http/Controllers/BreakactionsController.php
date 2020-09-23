<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class BreakactionsController extends Controller
{
       public function index(){

  DB::table('break_action_shotgun')->get();

    
return view('breakaction');
}
}