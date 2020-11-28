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
// Route::view("/",'home');
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('username');
    return view('login');
});
Route::view("register",'Register');
Route::post('register',[ProductController::class,'register']);
Route::post('/login',[Usercontroller::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detailsofeachproduct/{id}",[ProductController::class,'detailsofeachproduct']);
Route::get("search",[ProductController::class,'search']);
Route::post('/addtocart',[ProductController::class,'addtocart']);
Route::post('/wishlist',[ProductController::class,'wishlist']);
Route::get('/wishlisthere',[ProductController::class,'wishlisthere']);
Route::get("usercart",[ProductController::class,'usercart']);
Route::get("removecart/{id}",[ProductController::class,'removefromcart']);
Route::get('ordernow',[ProductController::class,'ordernow']);
Route::post('ordernow',[ProductController::class,'orderproduct']);
Route::post('orderplace',[ProductController::class,'orderplace']);
Route::get('myorders',[ProductController::class,'myorders']);