<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'page']);
Route::get('/home',[HomeController::class,'DemoAction']);
