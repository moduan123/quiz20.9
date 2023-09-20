<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
 

Route::get('/' , [MainController::class , 'home']);

Route::get('/about' , [MainController::class , 'about']);

Route::get('/post' , [MainController::class , 'post']);

Route::get('/contact' , [MainController::class , 'contact']);

