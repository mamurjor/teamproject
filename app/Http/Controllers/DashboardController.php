<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard view.
     */
    public function dashboard()
    {
        $userName = Auth::user()->name; // Get the authenticated user's name
        return view('admin.dashboard', compact('userName')); // Passing username to the dashboard view
    }

    /**
     * Display the dashboard with all data.
     */
    public function dashboardAllData()
    {
        // Fetch any additional data you want to pass to the dashboard view, if needed
        $userName = Auth::user()->name;
        // Add any other data like user statistics, orders, etc. here

        return view('admin.dashboard', compact('userName')); // Passing username and data
    }
}
