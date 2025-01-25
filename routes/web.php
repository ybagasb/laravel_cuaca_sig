<?php

use App\Http\Controllers\CuacaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/', [CuacaController::class, 'index']);
