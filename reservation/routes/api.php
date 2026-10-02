<?php

use App\Http\Controllers\FlightController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/flights',[FlightController::class,'show']);
Route::get('/users',[FlightController::class,'show']);
Route::get('/traves',[FlightController::class,'show']);
Route::get('/airlines',[FlightController::class,'show']);

Route::get('/flights/{flight}',[FlightController::class,'show']);
Route::get('/users/{user}',[FlightController::class,'show']);
Route::get('/traves/{trave}',[FlightController::class,'show']);
Route::get('/airlines/{airline}',[FlightController::class,'show']);

Route::put('/flights/{flight}',[FlightController::class,'update']);
Route::put('/users/{user}',[FlightController::class,'update']);
Route::put('/traves/{trave}',[FlightController::class,'update']);
Route::put('/airlines/{airline}',[FlightController::class,'update']);

Route::post('/flights/{flight}',[FlightController::class,'store']);
Route::post('/users/{user}',[FlightController::class,'store']);
Route::post('/traves/{trave}',[FlightController::class,'store']);
Route::post('/airlines/{airline}',[FlightController::class,'store']);

Route::delete('/flights/{flight}',[FlightController::class,'destroy']);
Route::delete('/users/{user}',[FlightController::class,'destroy']);
Route::delete('/traves/{trave}',[FlightController::class,'destroy']);
Route::delete('/airlines/{airline}',[FlightController::class,'destroy']);