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

//route are define in api.php

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/network', function () {
    return view('network');
})->name('network');

Route::get('/vibrate', function () {
    return view('vibrate');
})->name('vibrate');

Route::get('/bluetooth', function () {
    return view('bluetooth');
})->name('bluetooth');

Route::get('/clipboard', function () {
    return view('clipboard');
})->name('clipboard');

Route::get('/fullscreen', function () {
    return view('fullscreen');
})->name('fullscreen');


Route::get('/batterycharge', function () {
    return view('batterycharge');
})->name('batterycharge');

Route::get('/OnlineOffline', function () {
    return view('onlineOffline');
})->name('onlineOffline');

Route::get('/geolocation', function () {
    return view('geolocation');
})->name('geolocation');

