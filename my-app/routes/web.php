<?php
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/hello',[DemoController::class,'DemoAction2']);

