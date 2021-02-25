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
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');
Route::get('/', function () {
    return view('welcome');
});
//Route::get('about',function(){
//    return 'about content';
//});

Route::get('about/directions',function(){
    return 'Directions go here';
});
Route::any('submit-form',function(){
    return 'Process Form';
});
Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. ' content here';
});
Route::get('about/{a}/{b}',function($a,$b){
    return $a.'and'.$b;
});
Route::get('where',function(){
    return redirect('about/directions');
});
Route::get('about/{theSubject}','AboutController@showSubject');
