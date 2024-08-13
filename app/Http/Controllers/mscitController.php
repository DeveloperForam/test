<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mscitController extends Controller
{
    // public function calc(Request $request)
    // {
    //     $a=$request->a;
    //     $b=$request->b;
    //     echo $this->add($a, $b) . "<br>";
    //     echo $this->sub($a, $b) . "<br>";
    //     echo $this->mult($a, $b) . "<br>";
    //     echo $this->div($a, $b) . "<br>";
    // }

    // public function add($a, $b) {    
    //     echo $a + $b ;
    // }
    // public function sub($a, $b) {    
    //     echo $a - $b;
    // }
    // public function mult($a, $b) {    
    //     echo $a * $b;
    // }
    // public function div($a, $b) {    
    //     echo $a / $b;
    // }

    public function student_submit(Request $request){
        $fname=$request->fname;
        $lname=$request->lname;
        $dept=$request->dept;
       
        // return view('student',['f'=>$fname, 'l'=>$lname, 'd'=>$dept]);
    
        return view('student', compact('fname','lname','dept'));
    
    }
}
