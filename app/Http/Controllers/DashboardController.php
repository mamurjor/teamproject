<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function saveform(){



        return view('admin.grade.form');


    }


    public function gradesave(Request $request ){




        $full_name =  $request->full_name;

        $email =  $request->email;
        $cell =  $request->cell;

        //DB::insert("INSERT into grade (name,basic) VALUES('$username','$basic')");


         DB::insert("INSERT into employee (full_name,email,cell) VALUES('$full_name','$email','$cell')");



       return redirect()->route('listofwebistedata');


    }


    public function listofwebistedata(){

       $employee =  DB::select('select * from employee');

       return view('admin.grade.list',compact('employee'));

       //crud = create(insert), read(select), update


     //$insergrade=  DB::insert("INSERT into grade (name,basic) VALUES('Namefromcontroller','500000')");

       //$udpate= DB::update('update grade set name = "CEO" where id = ?', [7]);

    //     $userdelte = DB::delete('delete from grade where id = ?', [6]);


    //    dd($userdelte);

       //$allgrade =  DB::table('grade')->get();

      // $allgrade =  DB::table('grade')->first();

       //$allgrade =  DB::table('grade')->where('id','5')->get();

    //    $allgrade = DB::table('grade')->insert(
    //     [
    //         'name' => 'md',
    //         'basic' => 12000
    //     ]
    //     );

       //$allgrade = DB::table('grade')->where('id',5)->update(['name'=>'Sabika']);
     // $allgrade =  DB::table('grade')->where('id',5)->delete();



    }
}
