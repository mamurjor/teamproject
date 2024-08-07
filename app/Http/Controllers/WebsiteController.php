<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function full_website_controll(){

        return view('welcome');
    }
}
