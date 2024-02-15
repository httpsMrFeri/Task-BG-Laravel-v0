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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/devices",[\App\Http\Controllers\DeviceController::class,'index'])->name("devices");
Route::get("/events",[\App\Http\Controllers\EventController::class,'index'])->name("events");
Route::post("/events-store",[\App\Http\Controllers\EventController::class,'store'])->name("events.store");
