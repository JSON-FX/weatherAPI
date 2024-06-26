<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Weather Route
Route::post('/weather', [WeatherController::class, 'getWeather'])->name('weather');
