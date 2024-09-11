<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Hero;
use App\Models\AboutPersonDetails;
use App\Models\AboutPerInfos;
use App\Models\AboutExpertise;
use App\Models\Counter;
use App\Models\Service;
use App\Models\CallToAction;
use App\Models\ResumeExpertise;
use App\Models\Skill;
use App\Models\Post;
use App\Models\Category;

use Laravel\Ui\Presets\React;

use function Laravel\Prompts\select;

class ListController extends Controller
{

  //Hero List methode start

    public function herolist(){

       $herolist= DB::select('select * from heroes');
        return view('adminpart.hero.list',compact('herolist'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function herostore(Request $Request){

        $person_text=$Request->personalText;
        $user_name=$Request->username;
        $short_dis=$Request->shortDis;
        $button_text=$Request->btn_text;
        $button_url=$Request->btn_url;
        $image=$Request->image;
       

        DB::insert("INSERT INTO heroes(person_text,user_name,short_dis,button_text,button_url,image)Values('$person_text','$user_name','$short_dis','$button_text','$button_url','$image')");
          
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


 

   public function heroedit(Hero $hero){

   
    return view('adminpart.hero.edit', compact('hero'));

   }
   public function heroupdate(Request $request, Hero $hero){


    $hero->update($request->all());

    

    // Flash a success message to the session
    session()->flash('success', 'Data update successfully!'); 

    //retrun to herolist blade
     return redirect()->route('herolist');
    



   }

   public function herodelete(Hero $hero){

    $hero->delete();

    // Flash a success message to the session
    session()->flash('success', 'Data delete successfully!'); 

    //retrun to herolist blade
     return redirect()->route('herolist');


   }


   public function heroshow(Hero $hero){

 
    return view('adminpart.hero.show', compact('hero'));

   }


  //hero List methode----------------------------- end




  //about person details List methode start--------------------------start

  public function personDetailsList(){

    $personDetails=DB::select('select * from about_person_details');

    return view('adminpart.about.personDetails.list',compact('personDetails'));

  }

  public function personDetailsForm(){

    return view('adminpart.about.personDetails.form');
  }
 



  public function personDetailsStore(Request $request){
        
    AboutPersonDetails::create($request->all());


        // Flash a success message to the session
         session()->flash('success', 'Data inserted successfully!'); 

      //retrun to herolist blade
        return redirect()->route('personDetailsList');




  }


  public function persondetsedit(AboutPersonDetails $aboutperdets){

   
    return view('adminpart.about.personDetails.edit', compact('aboutperdets'));

   }


   public function persondetsupdate(Request $request, AboutPersonDetails $aboutperdets){


    $aboutperdets->update($request->all());

    

    // Flash a success message to the session
    session()->flash('success', 'Data update successfully!'); 

    //retrun to herolist blade
     return redirect()->route('personDetailsList');
    



   }


   public function persondetsdelete(AboutPersonDetails $aboutperdets){

    $aboutperdets->delete();

    // Flash a success message to the session
    session()->flash('success', 'Data delete successfully!'); 

    //retrun to herolist blade
     return redirect()->route('personDetailsList');


   }


   public function persondetsshow(AboutPersonDetails $aboutperdets){

 
    return view('adminpart.about.personDetails.show', compact('aboutperdets'));

   }


  //about person details List methode end---------------------------------------end


  //about person Infos List methode start--------------------------start

  public function personinfoslist(){

    $personinfos=DB::select('select * from about_per_infos');

    return view('adminpart.about.personinfos.list',compact('personinfos'));

  }

  public function personinfosform(){

    return view('adminpart.about.personinfos.form');
  }
 



  public function personinfosstore(Request $request){
        
    AboutPerInfos::create($request->all());


        // Flash a success message to the session
         session()->flash('success', 'Data inserted successfully!'); 

      //retrun to herolist blade
        return redirect()->route('personinfoslist');




  }


  public function personinfosedit(AboutPerInfos $aboutperInfos){

   
    return view('adminpart.about.personinfos.edit', compact('aboutperInfos'));

   }


   public function personinfosupdate(Request $request, AboutPerInfos $aboutperInfos){


    $aboutperInfos->update($request->all());

    

    // Flash a success message to the session
    session()->flash('success', 'Data update successfully!'); 

    //retrun to herolist blade
     return redirect()->route('personinfoslist');
    



   }


   public function personinfssdelete(AboutPerInfos $aboutperInfos){

    $aboutperInfos->delete();

    // Flash a success message to the session
    session()->flash('success', 'Data delete successfully!'); 

    //retrun to herolist blade
     return redirect()->route('personinfoslist');


   }


   public function personinfosshow(AboutPerInfos $aboutperInfos){

 
    return view('adminpart.about.personinfos.show', compact('aboutperInfos'));

   }







  //about person details List methode end---------------------------------------end


  //about expertise methode end---------------------------------------start


  public function aboutexpertiselist(){

    
    $aboutexpertise= DB::select('select * from about_expertises');
    return view('adminpart.about.expertise.list',compact('aboutexpertise'))->with('i',(request()->input('page',1)-1)*5);


  }

  public function aboutexpertiseform(){

    return view('adminpart.about.expertise.form');
  }
 
  public function aboutexpertsestore(Request $request){
        
    AboutExpertise::create($request->all());


        // Flash a success message to the session
         session()->flash('success', 'Data inserted successfully!'); 

      //retrun to herolist blade
        return redirect()->route('aboutexpertiselist');




  }


  public function aboutexpertseedit(AboutExpertise $aboutexpertise){

   
    return view('adminpart.about.expertise.edit', compact('aboutexpertise'));

   }

   public function aboutexpertiseupdate(Request $request, AboutExpertise $aboutexpertise){


    $aboutexpertise->update($request->all());

    

    // Flash a success message to the session
    session()->flash('success', 'Data update successfully!'); 

    //retrun to herolist blade
     return redirect()->route('aboutexpertiselist');
    



   }


   public function aboutexpertisedelete(AboutExpertise $aboutexpertise){

    $aboutexpertise->delete();

    // Flash a success message to the session
    session()->flash('success', 'Data delete successfully!'); 

    //retrun to herolist blade
     return redirect()->route('aboutexpertiselist');


   }

   public function aboutexpertiseshow(AboutExpertise $aboutexpertise){

 
    return view('adminpart.about.expertise.show', compact('aboutexpertise'));

   }


  //about expertise methode end---------------------------------------end
  




  



  //Resume exparise  List methode start---------------------------------------start

    public function expertiselist( ){


        $resumeExpertise= DB::select('select * from resume_expertises');
        return view('adminpart.resume.expertise.list',compact('resumeExpertise'))->with('i',(request()->input('page',1)-1)*5);

    }

    public function expertisestore(Request $Request){

      ResumeExpertise::create($Request->all());

        // successfull message
        session()->flash('success','Data inserted sucessfully done');

        //Redirect Expertise List 
      return redirect()->route('expertiselist');

    }

    public function expertiseedit(ResumeExpertise $resumeexpertise){

      return view('adminpart.resume.expertise.edit',compact('resumeexpertise'));
    }

    public function expertiseupdate(Request $request, ResumeExpertise $resumeexpertise){

      $resumeexpertise->update($request->all());

      session()->flash('success','Data update successfully');

      return redirect()->route('expertiselist');



    }


    public function expertisedelete(ResumeExpertise $resumeexpertise){

      $resumeexpertise->delete();

      session()->flash('success','Data delete successfully');

      return redirect()->route('expertiselist');

    }

    public function expertiseshow(ResumeExpertise $resumeexpertise){
      return view('adminpart.resume.expertise.show',compact('resumeexpertise'));
    }

  //Resume exparise  List methode ---------------------------------------end




  //Resume skill  List methode ---------------------------------------start


  public function skilllist( ){


    $skill= DB::select('select * from skills');
    return view('adminpart.resume.skills.list',compact('skill'))->with('i',(request()->input('page',1)-1)*5);

}

public function skillform(){

  return view('adminpart.resume.skills.form');
}

public function skillstore(Request $request){
        
  Skill::create($request->all());


      // Flash a success message to the session
       session()->flash('success', 'Data inserted successfully!'); 

    //retrun to herolist blade
      return redirect()->route('skilllist');

}


public function skilledit(Skill $skill){

  return view('adminpart.resume.skills.edit',compact('skill'));
}



public function skillupdate(Request $request, Skill $skill){

  $skill->update($request->all());

  session()->flash('success','Data update successfully');

  return redirect()->route('skilllist');



}

public function skilldelete(Skill $skill){

  $skill->delete();

  session()->flash('success','Data delete successfully');

  return redirect()->route('skilllist');

}

public function skillshow(Skill $skill){
  return view('adminpart.resume.skills.show',compact('skill'));
}





  //Resume skill  List methode ---------------------------------------end







    //Counter  List methode start---------------------------------------start

    public function counterlist( ){


      $counter= DB::select('select * from counters');
      return view('adminpart.counter.list',compact('counter'))->with('i',(request()->input('page',1)-1)*5);

  }

  public function counterform(){

    return view('adminpart.counter.form');
  }
  public function counterstore(Request $request){

    Counter::create($request->all());


    // Flash a success message to the session
     session()->flash('success', 'Data inserted successfully!'); 

  //retrun to herolist blade
    return redirect()->route('counterlist');

    
  }

  public function counteredit(Counter $counter){

    return view('adminpart.counter.edit', compact('counter'));


  }
  public function counterupdate(Request $request, Counter $counter){

    $counter->update($request->all());

    

    // Flash a success message to the session
    session()->flash('success', 'Data update successfully!'); 

    //retrun to herolist blade
     return redirect()->route('counterlist');

   

  }

  public function counterdelete(Counter $counter){

    $counter->delete();

    // Flash a success message to the session
    session()->flash('success', 'Data delete successfully!'); 

    //retrun to herolist blade
     return redirect()->route('counterlist');

  }

  public function countershow(Counter $counter){

    return view('adminpart.counter.show',compact('counter'));




  }

 



    
    //Counter  List methode end---------------------------------------end




    //service  List methode end---------------------------------------start


    public function servicelist(){

      $servicealldata=DB::select('select * from services');
      return view('adminpart.service.list',compact('servicealldata'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function serviceform(){
      return view('adminpart.service.form');
    }

    public function servicestore(Request $request){


      Service::create($request->all());



       // Flash a success message to the session
     session()->flash('success', 'Data inserted successfully!'); 

     //retrun to herolist blade
       return redirect()->route('servicelist');

  
    }


    public function serviceedit(Service $service){
      return view('adminpart.service.edit',compact('service'));
    }


    public function serviceupdate(Request $request, Service $service){

      $service->update($request->all());

      session()->flash('success','Data update successfully');

      return redirect()->route('servicelist');


    }

    public function servicedelete(Service $service){

      $service->delete();

      session()->flash('success','Data delete successfully');

      return redirect()->route('servicelist');

    }

    public function serviceshow(Service $service){
      return view('adminpart.service.show',compact('service'));
    }


    //service  List methode end---------------------------------------end




    //Call to action  List methode ---------------------------------------start

    public function calltoactionlist(){
      $calltoactiondata=DB::select('select * from call_to_actions');
      return view('adminpart.calltoaction.list',compact('calltoactiondata'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function calltoactionform(){
      return view('adminpart.calltoaction.form');
    }

    public function calltoactionstore(Request $request){

      CallToAction::create($request->all());

      session()->flash('success','Data insert successfully');

      return redirect()->route('calltoactionlist');




    }


    public function calltoactionedit(CallToAction $calltoaction){

      return view('adminpart.calltoaction.edit',compact('calltoaction'));
    }

    public function calltoactionupdate(Request $request, CallToAction $calltoaction){

      $calltoaction->update($request->all());

      session()->flash('success','Data update successfully');

      return redirect()->route('calltoactionlist');


      
    }


    public function calltoactiondelete(CallToAction $calltoaction){

      $calltoaction->delete();

      session()->flash('success','Data delete successfully');
      return redirect()->route('calltoactionlist');


    }

    public function calltoactionshow(CallToAction $calltoaction){

      return view('adminpart.calltoaction.show',compact('calltoaction'));
    }

    //Call to action  List methode ---------------------------------------end





    // Post   List methode ---------------------------------------start

    public function postlist(){

      
      $allpostdata=DB::select('select * from posts');

      return view('adminpart.post.list',compact('allpostdata'))->with('i',(request()->input('page',1)-1)*5);
    }


    public function postform(){
      return view('adminpart.post.form');
    }


    public function poststore(Request $request){


      Post::create($request->all());

      session()->flash('success','Data insert successfully');

      return redirect()->route('postlist');


    }


    public function postedit(Post $post){
      return view('adminpart.post.edit',compact('post'));
    }



    public function postupdate(Request $request, Post $post){

      $post->update($request->all());

      session()->flash('success','Data update successfully');

      return redirect()->route('postlist');


    }

    public function postdelete(Post $post){

      $post->delete();

      session()->flash('success','Data delete successfully');

      return redirect()->route('postlist');



    }


    public function postshow(Post $post){

      return view('adminpart.post.show',compact('post'));
    }


    // Post   List methode ---------------------------------------end

    // category   List methode ---------------------------------------start

    public function categorylist(){

    $categorydata=  DB::select('select * from categories');

    return view('adminpart.category.list',compact('categorydata'))->with('i',(request()->input('page',1)-1)*5);




    }

    public function categoryform(){
      return view('adminpart.category.form');
    }


    public function categorystore(Request $request){


      Category::create($request->all());

      session()->flash('success','Data insert successfully');

      return redirect()->route('categorylist');


    }


    public function categoryedit(Category $category){
      return view('adminpart.category.edit',compact('category'));
    }


    public function categoryupdate(Request $request, Category $category){

      $category->update($request->all());

      session()->flash('success','Data update successfully');

      return redirect()->route('categorylist');


    }


    public function categorydelete(Category $category){

      $category->delete();

      session()->flash('success','Data delete successfully');

      return redirect()->route('categorylist');



    }


    public function categoryshow(Category $category){

      return view('adminpart.category.show',compact('category'));
    }

    // category   List methode ---------------------------------------end













}


