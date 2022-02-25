<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;


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

// Route::get('/create', function () {
//     return view('create');
// })->name('create');

Route::get("/students", [StudentController::class, "index"]);

Route::post("/students", [StudentController::class, "store"])->name('students.store');

Route::get('/students/create', [StudentController::class, "create"])->name('students.create');

Route::get('/students/edit/{id}', [StudentController::class, "edit"])->name('students.edit');

Route::put('/students/update/{id}', [StudentController::class, "update"])->name('students.update');

Route::delete('/students/destroy/{id}', [StudentController::class, "destroy"])->name('students.destroy');