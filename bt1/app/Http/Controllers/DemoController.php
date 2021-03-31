<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function ViewHome(){
        $title='Sơn';
        return view('home',compact('title'));
        //echo "hello hhhh ".$name;
    }
}
