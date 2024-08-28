<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faculty;

class FacultyController extends Controller
{
    public function disp(){
        $faculty=faculty::all();
        // dd($faculty);
        return view('faculty.disp',['disp'=>$faculty]);
    }

    // public function delete($id){
    //     // dd($id);
    //     $id = Employee::find($id);
    //     $id->delete;
    // }
}
