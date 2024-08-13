<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employee_submit(Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address;
        $position=$request->position;

        return view('Employee', compact('name','email','phone','address','position'));
    }
}
