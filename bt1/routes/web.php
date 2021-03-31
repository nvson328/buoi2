<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\NewController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('home',[DemoController::class,'ViewHome']);//home:ten url, ViewHome: class trong controller
//route::view('home1','home');//Khi cần trả luôn ra 1 view thì sử dụng,home1: tên url, home:tên file 
Route::get('welcome/{name}',[DemoController::class,'ViewHome']);
Route::get('abc/{id}',NewController::class);//không cần khai báo method vì bên controller sử dụng __invoke()
