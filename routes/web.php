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

Route::resource('games', 'GameController');

Route::resource('student', 'StudentController');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/students.createStudent', function () {
    return view('students.createStudent');
})->name('createStudent');

Route::get('/students.editStudent', function () {
    return view('students.editStudent');
})->name('students.editStudent');