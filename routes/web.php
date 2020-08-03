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



Auth::routes([
    'register' => false,
    // 'verify' => true,
]);

Route::middleware('auth')->group(function () {
    Route::get('/', 'VoicedashController@index')->name('home');
    Route::resource('/voices', 'VoicedashController');
    Route::resource('/video', 'VideoController');
    Route::resource('/audio', 'AudioController');
    Route::resource('/image', 'ImageController');

    Route::prefix('audio')->group(function () {
        Route::resource('/tts/polly', 'AmazonController');
        Route::resource('/tts/wavenet', 'GoogleController');
    });
});

