<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FormController extends Controller
{
    public function heroform(){

        return view('adminpart.hero.form');
    }
   
    public function expertiseform(){

        return view('adminpart.resume.expertise.form');
    }
   
   
}
