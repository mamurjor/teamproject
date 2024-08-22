<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

use function Laravel\Prompts\select;

class ListController extends Controller
{

  //Hero List methode start

    public function herolist(){

       $herolist= DB::select('select * from banner');
        return view('adminpart.hero.list',compact('herolist'));

    }

    public function heroFormDataCatch(Request $Request){

        $person_text=$Request->personalText;
        $user_name=$Request->username;
        $short_dis=$Request->shortDis;
        $button_text=$Request->btn_text;
        $button_url=$Request->btn_url;
        $image=$Request->image;

        DB::insert("INSERT INTO banner(person_text,user_name,short_dis,button_text,button_url,image)Values('$person_text','$user_name','$short_dis','$button_text','$button_url','$image')");
          
         // Validate the request
         $Request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);

        // Get the uploaded file
        $image = $Request->file('image');

        // Generate a unique file name
        $imageName = time().'.'.$image->extension();

        // Move the image to the public folder
        $image->move(public_path('images'), $imageName);

       
        // return back()->with('success', 'Image uploaded successfully!');

    
        // Flash a success message to the session
        session()->flash('success', 'Data inserted successfully!'); 

        //retrun to herolist blade
         return redirect()->route('herolist');

    }


   //hero List methode end




  

  //Expertise List methode start

    public function expertiselist( ){


        $resumeExpertise= DB::select('select * from resume_expertise');
        return view('adminpart.expertise.list',compact('resumeExpertise'));

    }

    public function expertiseFormDataCatch(Request $Request){

        $year=$Request->year;
        $designation=$Request->designation;
        $discription=$Request->discription;

        DB::insert("INSERT INTO resume_expertise(year,designation,discription)Values('$year','$designation','$discription')");
     
        // successfull message
        session()->flash('success','Data inserted sucessfully done');

        //Redirect Expertise List 
      return redirect()->route('expertiselist');

    }
  //Expertise List methode end



 //Education List methode start

    public function educationlist(){
        return view('adminpart.education.list');
    }


    //Education List methode end




    //Person Details List methode start

    public function personDetailsList(){

      $personDetails=DB::select('select * from about_per_details');

      return view('adminpart.personDetails.list',compact('personDetails'));





    }


  //Person Details List methode end





}


