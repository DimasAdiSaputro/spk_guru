<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SawController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hitung-saw', [SawController::class, 'hitung']);
