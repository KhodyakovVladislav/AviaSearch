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
Route::get('/rewiew', function () {
    return view('rewiew');
});
Route::get('/', function () {
    return view('Home');
});
Route::get('/Search', function () {
    return view('Search');
});
Route::get('/Enter', function () {
    return view('enter');
});
Route::get('/Help', function () {
    return view('Help');
});


Route::get('/{id}', function ($id) {
    return view('Home');
});
