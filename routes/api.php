<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/yo',function (){
//    return 'adimer';
//});
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);

Route::group(['middleware'=>'auth:sanctum'],function (){
    Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout']);
    Route::post('/me',[\App\Http\Controllers\UserController::class,'me']);
    Route::get('/student',[\App\Http\Controllers\StudentController::class,'index']);
    Route::post('/student',[\App\Http\Controllers\StudentController::class,'store']);
    Route::put('/student/{student}',[\App\Http\Controllers\StudentController::class,'update']);
    Route::post('/student',[\App\Http\Controllers\StudentController::class,'store']);
    Route::delete('/student/{student}',[\App\Http\Controllers\StudentController::class,'destroy']);
    Route::apiResource('/teacher',\App\Http\Controllers\TeacherController::class);
});

