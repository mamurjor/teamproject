<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hero;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Hero $hero)
    {
        $hero_count=Hero::count();
        return view('dashboard',compact('hero_count'));
    }
}
