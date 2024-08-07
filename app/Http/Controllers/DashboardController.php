<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
  
   public function dashboard_all_data(){

    return view('dashboard');

   }
   
    
}
