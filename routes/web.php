<?php

use App\Http\Controllers\Notecontroller;
use App\Http\Controllers\Welcomecontroller;
use Illuminate\Support\Facades\Route;


Route::resource('note', Notecontroller::class);