<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/subjects/{id}', [ApiController::class, 'getSubjects']);
Route::get('/topics/{id}', [ApiController::class, 'getTopics']);
Route::get('/teacher/{teacherId}/{datetime}/{duration?}', [ApiController::class, 'getAvailableTeacher']);
