<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeEducation;

class ResumeEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $education=ResumeEducation::latest()->paginate(5);
        return view('adminpart.resume.education.index',compact('education'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpart.resume.education.create');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


      
        ResumeEducation::create($request->all());


        // Flash a success message to the session
         session()->flash('success', 'Data inserted successfully!'); 

      //retrun to herolist blade
        return redirect()->route('education.index');


        
    }

    /**
     * Display the specified resource.
     */
    public function show(ResumeEducation $education)
    {
       return view('adminpart.resume.education.show',compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ResumeEducation $education)
    {
        return view('adminpart.resume.education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ResumeEducation $education)
    {
        $education->update($request->all());

        // Flash a success message to the session
         session()->flash('success', 'Data update successfully!'); 

        //retrun to herolist blade
        return redirect()->route('education.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ResumeEducation $education)
    {
        $education->delete();

     // Flash a success message to the session
         session()->flash('success', 'Data delete successfully!'); 

      //retrun to herolist blade
        return redirect()->route('education.index');
    }
}
