<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Usercontroller;
Use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view("/",'home');
Route::get('/login', function () {
    return view('login');
});
Route::view("/register",'Register');
Route::post('/login',[Usercontroller::class,'login']);
Route::get("/index",[ProductController::class,'index']);