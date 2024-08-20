<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard');
    }




public function showWelcome()
{
    $userName = Auth::user()->name;
    return view('admin/dashboard', compact('userName'));
}




    public function dashboard_all_data(){

        return view('admin/dashboard');

       }
}
