<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
