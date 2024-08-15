<?php

use App\Http\Controllers\IgnisController;
use App\Http\Controllers\ScientiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/scientia/search', function () {
    return view('scientia.search');
})->name('scientia-search');

Route::get('/scientia/process', function () {
    return view('scientia.process');
})->name('scientia-process');

Route::get('/scientia/code', function () {
    return view('scientia.code');
})->name('scientia-code');

Route::get('/scientia/result', [ScientiaController::class, 'searchText']);
Route::post('/scientia/result', [ScientiaController::class, 'searchPdf']);

Route::get('/ignis/dashboard', [IgnisController::class, 'showLatest'])->name('ignis-dashboard');

Route::post('/ignis/sensor-data', [IgnisController::class, 'store']);

Route::get('/ignis/predict', function () {
    return view('ignis.predict');
})->name('ignis-predict');

Route::post('/ignis/predict', [IgnisController::class, 'predict'])->name('ignis-result');

Route::get('/ignis/component', function () {
    return view('ignis.component');
})->name('ignis-component');


Route::get('/ignis/process', function () {
    return view('ignis.process');
})->name('ignis-process');

Route::get('/ignis/code', function () {
    return view('ignis.code');
})->name('ignis-code');