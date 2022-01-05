<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ "auth",'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
        Route::get('/dashboard', function () {
            return view('layouts.backend.index');
        })->name('dashboard');
    });




require __DIR__.'/auth.php';
