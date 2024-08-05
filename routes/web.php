<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mscitController;
use App\Http\Controllers\DemoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello', function(){
    // echo "test";
    for($i=1; $i<=10; $i++)
        echo $i;
    // return ('this is my say hello');
});
Route::get('demo',[DemoController::class,'printHello']);

// Route::get('/student', function () {
//     return view('student');
// });

// Route::get('/login', function () {
//     return view('login');
// });
