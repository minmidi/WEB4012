<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::get('',[AdminController::class,'index'])->name('admin');

    Route::get('/logout',[AdminController::class,'logout']) -> name('logout');

    Route::resource('/student', StudentController::class);
});

    
    

    

    

