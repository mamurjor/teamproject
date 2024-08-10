<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    //

    public function listofwebistedata(){

       //$employee =  DB::select('select * from employee');

       //crud = create(insert), read(select), update


     //$insergrade=  DB::insert("INSERT into grade (name,basic) VALUES('Namefromcontroller','500000')");

       //$udpate= DB::update('update grade set name = "CEO" where id = ?', [7]);

        $userdelte = DB::delete('delete from grade where id = ?', [6]);


       dd($userdelte);
    }
}
