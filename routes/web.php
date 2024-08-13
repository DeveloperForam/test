<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mscitController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello', function(){
    // echo "test";
    for($i=1; $i<=10; $i++)
        echo $i;
    // return ('this is my say hello');
});

Route::get('/demo',[DemoController::class,'printHello']);

// Route::get('bye',[DemoController::class,'printBye']);

Route::get('calc/{a?}/{b?}',[mscitController::class,'calc']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/empregistration', function () {
    return view('Empregistration');
});

Route::post('student-submit',[mscitController::class,'student_submit'])->name('student-submit');

Route::post('employee-submit',[EmployeeController::class,'employee_submit'])->name('employee-submit');
