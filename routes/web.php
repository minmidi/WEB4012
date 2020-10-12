<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the Rout eServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'], function () {
    Route::resources([
        '/' => 'App\Http\Controllers\Admin\Admincontroller',
        'student' => 'App\Http\Controllers\Admin\StudentController',
        'subject' => 'App\Http\Controllers\Admin\SubjectController',
        'post' => 'App\Http\Controllers\Admin\PostController',
        'category' => 'App\Http\Controllers\Admin\CategoryController',
        'comment' => 'App\Http\Controllers\Admin\CommentController',
    ]);
});

    
    

    

    

