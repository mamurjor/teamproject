<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
<<<<<<< HEAD
    public function dashboard(){
        return view('admin/dashboard');
    }
=======
  
   public function dashboardAllData(){
>>>>>>> 106a7276a8b8e874f9a4d0a8f2466896ca979bbe




public function showWelcome()
{
    $userName = Auth::user()->name;
    return view('admin/dashboard', compact('userName'));
}




    public function dashboard_all_data(){

        return view('admin/dashboard');

       }
}
