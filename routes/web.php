<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{name}', function () {
    return view('index', [
        'name' => 'blade'
    ]);
});

Route::get('/hello', function (){
    return 'Hello!';
})->name('helllo');

Route::get('hallo', function () {
    return redirect()->route('helllo');
});

Route::fallback(function () {
    return 'Still got somewhere';
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

// Different HTTP methods
// HTTP verbs
// Get to read data, fetching 
// Post to store new data to create
// Put to modify something
// Delete to destroy data