<?php
use App\Http\Controllers\DemoController;
//use App\Http\Controllers\HomeController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/hello',[DemoController::class,'DemoAction'])->middleware([DemoMiddleware::class]);
//Route::get('/',[HomeController::class,'Page']);

