<?php

use App\Http\Controllers\Bloodcontroller;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::view("login",'login');
Route::view("login_hospital",'login_hospital');
Route::view("registration",'registration');
Route::view("registration_hospital",'registration_hospital');
Route::view("mainPage",'mainPage');
Route::view("viewdetails",'viewdetails');
// Route::view("select",'select');

Route::post("registration",[Bloodcontroller::class,'addData']);
Route::post("registration_hospital",[Bloodcontroller::class,'addData1']);
Route::post("loggedIn",[Bloodcontroller::class,'loggedIn']);
Route::post("logged",[Bloodcontroller::class,'logged']);
Route::post("add",[Bloodcontroller::class,'addblood']);
Route::get("/welcome",[Bloodcontroller::class,'list']);
Route::get("/mainPage",[Bloodcontroller::class,'listview']);
Route::get("/receiver",[Bloodcontroller::class,'listview1']);
Route::get("/viewdetails/{id}",[Bloodcontroller::class,'view']);