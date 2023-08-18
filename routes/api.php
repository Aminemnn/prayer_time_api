<?php

use App\Http\Controllers\aoutcontroller;
use App\Http\Controllers\avrilcontroller;
use App\Http\Controllers\decembrecontroller;
use App\Http\Controllers\fevriercontroller;
use App\Http\Controllers\janviercontroller;
use App\Http\Controllers\juilletcontroller;
use App\Http\Controllers\juincontroller;
use App\Http\Controllers\maicontroller;
use App\Http\Controllers\marscontroller;
use App\Http\Controllers\novembercontroller;
use App\Http\Controllers\octobercontroller;
use App\Http\Controllers\septembercontroller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::get('/janvier',[janviercontroller::class,'index']);
Route::get('/fevrier',[fevriercontroller::class,'index']);
Route::get('/mars',[marscontroller::class,'index']);
Route::get('/avril',[avrilcontroller::class,'index']);
Route::get('/mai',[maicontroller::class,'index']);
Route::get('/juin',[juincontroller::class,'index']);
Route::get('/juillet',[juilletcontroller::class,'index']);
Route::get('/aout',[aoutcontroller::class,'index']);
Route::get('/september',[septembercontroller::class,'index']);
Route::get('/october',[octobercontroller::class,'index']);
Route::get('/november',[novembercontroller::class,'index']);
Route::get('/decembre',[decembrecontroller::class,'index']);
