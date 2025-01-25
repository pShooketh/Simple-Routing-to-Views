<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'show']);

