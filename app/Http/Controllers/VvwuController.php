<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class VvwuController extends Controller
{
    public function disp(){
        $emp=employee::all();
        // dd($emp);
        return view('employees.disp',['disp'=>$emp]);
    }
}
