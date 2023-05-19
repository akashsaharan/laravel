<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\productcontroller;
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

Route::get('/login', function () {
    return view('login');
    

});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
    

});

Route::post("/login",[usercontroller::class,'login']);
Route::get("/",[productcontroller::class,'index']);
Route::get("detail/{id}",[productcontroller::class,'detail']);
Route::get("search",[productcontroller::class,'search']);
Route::post("add_to_cart",[productcontroller::class,'addtocart']);
Route::get("cartlist",[productcontroller::class,'cartlist']);
Route::get("removecart/{id}",[productcontroller::class,'removeCart']);
Route::get("ordernow",[productcontroller::class,'ordernow']);
Route::post("orderplace",[productcontroller::class,'orderplace']);
Route::get("myorder",[productcontroller::class,'myorder']);
