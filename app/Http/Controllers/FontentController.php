<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hero;
use App\Models\AboutPersonDetails;
use App\Models\AboutPerInfos;
use App\Models\AboutExpertise;
use App\Models\ResumeExpertise;
use App\Models\ResumeEducation;
use App\Models\Skill;
use App\Models\Counter;
use App\Models\Service;
use App\Models\CallToAction;

class FontentController extends Controller
{
    public function fontent(){

       $herodata= Hero::all();
       $persondetails=AboutPersonDetails::all();
       $personinfos=AboutPerInfos::all();
       $aboutexpertise=AboutExpertise::all();
       $resumerxpertise=ResumeExpertise::all();
       $resumeeducation=ResumeEducation::all();
       $skill=Skill::all();
       $counter=Counter::all();
       $service=Service::all();
       $calltoaction=CallToAction::all();

       return view('welcome',compact('herodata','persondetails','personinfos','aboutexpertise','resumerxpertise','resumeeducation','skill','counter','service','calltoaction'));



    }
}
