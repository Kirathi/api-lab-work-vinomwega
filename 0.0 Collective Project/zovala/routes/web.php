<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
   return view('test');
   echo "<h1>Default Request</h1>";
});

Route::get('kutry', function () {
   return view('kutry');
   echo "<h1>Default Request</h1>";
});
//RoleController->all()
//RoleController::class -  App\Http\Controllers\RoleController


//Roles routes
Route::get('role/all',[RoleController::class,'all']);
Route::get('roles',[RoleController::class,'all']);
Route::get('role/add',[RoleController::class,'add']);
Route::post('role/save',[RoleController::class,'save']);
Route::get('role/edit',[RoleController::class,'edit']);

//users
Route::get('users',[UserController::class,'all']);

