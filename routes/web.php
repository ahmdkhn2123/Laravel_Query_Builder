<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBPController;


Route::get('/',[QueryBPController::class,'index']);
Route::get('show',[QueryBPController::class,'show']);
Route::get('delete/{id}',[QueryBPController::class,'del']);
Route::get('edit/{id}',[QueryBPController::class,'edit']);





Route::post('insert',[QueryBPController::class,'addP']);
Route::post('/update/{id}',[QueryBPController::class,'update']);
