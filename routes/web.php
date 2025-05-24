<?php

use App\Http\Controllers\ExameController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/exames/create', [ExameController::class, 'create']);
Route::post('/exames', [ExameController::class, 'store']);
Route::get('/exames', [ExameController::class, 'index']);
