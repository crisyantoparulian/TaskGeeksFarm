<?php

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
Route::get('task1', function () {
    return view('task.index');
});
Route::get('profile', function () {
    return view('task.profile');
});
Route::get('contact', function () {
    return view('task.contact');
});
