<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacksPricing;
use Illuminate\Support\Facades\DB;

class PacksPricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $packspricing=PacksPricing::latest();
        // return view('adminpart.packspricing.index',compact('packspricing'))->with('i');
        $packspricing=PacksPricing::latest()->paginate(5);
        return view('adminpart.packspricing.index',compact('packspricing'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpart.packspricing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        // PacksPricing::create($request->all());

       


       
        $package_name=$request->package_name;
        $price=$request->price;
        $button_text=$request->button_text;
        $button_url=$request->button_url;
        

        $package_feature=$request->field_name;
        $serialize=serialize($package_feature);
     
       
        DB::insert("INSERT INTO packs_pricings(package_name,price,button_text,button_url,package_feature)Values('$package_name','$price','$button_text','$button_url','$serialize')");
          


      

        // Flash a success message to the session
         session()->flash('success', 'Data inserted successfully!'); 

      //retrun to herolist blade
        return redirect()->route('packspricing.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PacksPricing $packspricing)
    {
        return view('adminpart.packspricing.edit',compact('packspricing'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PacksPricing $packspricing)
    {
        $packspricing->update($request->all());

        // Flash a success message to the session
         session()->flash('success', 'Data update successfully!'); 

        //retrun to herolist blade
        return redirect()->route('packspricing.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PacksPricing $packspricing)
    {
        $packspricing->delete();

        // Flash a success message to the session
            session()->flash('success', 'Data delete successfully!'); 
   
         //retrun to herolist blade
           return redirect()->route('packspricing.index');
    }
}
