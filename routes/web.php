<?php

use App\Http\Controllers\BatchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/admin-login', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/teacher-login', 'App\Http\Controllers\Auth\LoginController@teacherLogin');
Route::get('/operation-login', 'App\Http\Controllers\Auth\LoginController@operationLogin');




Route::group(['middleware' => 'auth'], function () {
    Route::get('table-list', function () {
        return view('pages.table_list');
    })->name('table');

    Route::get('typography', function () {
        return view('pages.typography');
    })->name('typography');

    Route::get('icons', function () {
        return view('pages.icons');
    })->name('icons');

    Route::get('map', function () {
        return view('pages.map');
    })->name('map');

    Route::get('notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('rtl-support', function () {
        return view('pages.language');
    })->name('language');

    Route::get('upgrade', function () {
        return view('pages.upgrade');
    })->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class ,'index']);

    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    // Route::get('/student-dashboard', [HomeController::class ,'studentDasboard']);
    Route::get('/admin-dashboard', [HomeController::class ,'adminDashboard']);
    Route::get('/teacher-dashboard', [HomeController::class ,'teacherDashboard']);
    Route::get('/operation-dashboard', [HomeController::class ,'operationDashboard']);
    




    Route::get('add-teacher', [TeacherController::class, 'create'])->name('add-teacher');
    Route::post('add-teacher', [TeacherController::class, 'store'])->name('add-teacher');
    Route::get('manage-teacher', [TeacherController::class, 'index'])->name('manage-teacher');


    // batch controller for class
    Route::get('create-classes', [BatchController::class, 'create'])->name('class.create');
    Route::post('create-classes', [BatchController::class, 'store'])->name('class.store');
    Route::get('manage-classes', [BatchController::class, 'index'])->name('manage-class');
    Route::get('show-classes/{id}', [BatchController::class, 'show'])->name('show-class');





    Route::get('add-product', [TeacherController::class, 'store'])->name('add-product');
    Route::post('add-product', [TeacherController::class, 'store'])->name('add-product');
});
