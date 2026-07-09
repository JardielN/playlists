<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController; // Controlador importado

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return 'Welcome to our home page!';
});
*/

Route::get('/', [PagesController::class, 'dashboard'])->name('dashboard');
Route::get('/lineas', [PagesController::class, 'monitorLineas'])->name('lineas.index');
Route::get('/alertas', [PagesController::class, 'reportarAlerta'])->name('alertas.create');