<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todo/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todo/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::patch('/todo/{todo}', [TodoController::class, 'update']);
Route::delete('/todo/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get('/add', function () {
    return view('todo.add');
});

Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});