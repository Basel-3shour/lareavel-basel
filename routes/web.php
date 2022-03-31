<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/task/{id}', function ($id) {
    $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
    $task=$tasks[$id];

    return view('task',compact('task'));
});




Route::get('/contact', function () {

    return view('contact_us');
});





Route::post('/contact', function () {
$name=$_POST['name'];
    return view('contact_us',compact('name'));
});





Route::get('/about', function () {
    $name ='basel';
    $age=25;
    //$tasks=['task1','task2','task3'];
    $tasks=['1'=>'task1','2'=>'task2','3'=>'task3'];
  /*  return view('about',[
        'namea'=>$name,
        'age'=>$age
    ]);
    */

    return view('about',compact('tasks'));
});