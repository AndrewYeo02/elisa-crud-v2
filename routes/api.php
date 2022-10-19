<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\LogbookController;
use App\Http\Controllers\Api\TraineeController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\API\UserController;


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


// Route::group(['prefix'=>'api','namespace' => 'App\Http\Controllers\Api'],function(){
//     Route::apiResource('logbook', LogbookController::class);
//     Route::apiResource('trainee',TraineeController::class);
// });
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('api')->group(function () {
    Route::resource('logbook', LogbookController::class);
    Route::resource('trainee',TraineeController::class);
    Route::resource('task',TaskController::class);

});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
