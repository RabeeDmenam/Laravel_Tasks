<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentsControllor;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {return view('welcome');});
Route::get('GetForm',[BlogController::class,'create']);
Route::get('storeData',[BlogController::class,'store']);
Route::get('getdata',[BlogController::class,'index']);

//update route
Route::get('editdata/{$id}',[BlogController::class,'edit']);
Route::post('update',[BlogController::class,'update']);
//Students route
Route::get('Student/create',[StudentsControllor::class,'create']);

Route::post('Student/store',[StudentsControllor::class,'store']);

Route::get('Student/index',[StudentsControllor::class,'index']);
//Login Controller
Route::get('Login', [StudentsControllor::class, 'Login']);
Route::post('DoLogin', [StudentsControllor::class, 'DoLogin']);
Route::get('logout', [StudentsControllor::class, 'logout']);
