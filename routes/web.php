<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'ShowUserHome']);

Route::get('/About',[PageController::class,'ShowUserAbout']);

Route::get('/Post',[PageController::class,'ShowUserPost']);
