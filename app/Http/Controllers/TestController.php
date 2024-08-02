<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

class myController extends Controller{

    function test(){
        echo"This is my function";
        //return view('login');
    }
}