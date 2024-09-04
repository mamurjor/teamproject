<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Display a listing of the packages
    public function index()
    {
        $packages = Package::all();
        return view('admin.content.package.index', compact('packages'));
    }

    // Show the form to create a new package
    public function create()
    {
        return view('admin.content.package.create');
    }

    // Store a newly created package in storage
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'duration' => 'required|string|max:100',
        'features' => 'nullable|array',
        'features.*' => 'nullable|string',
    ]);

    // Convert features array to a single string
    if (isset($validatedData['features'])) {
        $validatedData['features'] = implode(', ', $validatedData['features']);
    }

    // Create the package without user_id
    Package::create($validatedData);
// Flash success message using PHP Flasher
    flash()->addSuccess('Package updated successfully.');
    return redirect()->route('package');
}


    // Show the form to edit an existing package
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.content.package.edit', compact('package'));
    }

   // Update the specified package in storage
public function update(Request $request, $id)
{
    $package = Package::findOrFail($id);

    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'duration' => 'required|string|max:100',
        'features' => 'nullable|array', // Validate as an array
        'features.*' => 'nullable|string', // Each feature is a string
    ]);

    // Convert the features array to a comma-separated string
    if (isset($validatedData['features'])) {
        $validatedData['features'] = implode(', ', $validatedData['features']);
    }

    // Update the package with the new data
    $package->update($validatedData);
    flash()->addSuccess('Package updated successfully.');
    // Redirect to the package index with a success message
    return redirect()->route('package');
}


    // Delete the specified package from storage
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();
        flash()->addSuccess('Package deleted successfully.');
        return redirect()->route('package');
    }
}
