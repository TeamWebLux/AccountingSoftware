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

Route::get('/',function (){
    return view('Templete');
})->name('Templete');
Route::get('/m',function (){
    return view('templete');
})->name('user.add');
Route::get('/user',[UserController::class,'index'])->name('showuser');
Route::get('/userAddv',[UserController::class,'create_user'])->name('adduserv');
Route::post('/userAdd',[UserController::class,'storeUserData'])->name('adduser');
Route::get('/Coustom/{name}',[UserController::class,'coustom'])->name('Coustom');
// Route::post('/userAdd',[UserController::class,'store'])->name('us');


Route::get('/addrole',[RoleController::class,'addrolev'])->name('addrolev');
Route::post('/addrole',[RoleController::class,'addrole'])->name('addrole');
Route::get('/role',[RoleController::class,'index'])->name('showrole');

