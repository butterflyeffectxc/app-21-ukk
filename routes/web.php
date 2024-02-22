<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth
Route::get('/login', [AuthenticationController::class, "loginView"]);
Route::get('/register', [AuthenticationController::class, "registerView"]);
Route::post('/login', [AuthenticationController::class, "login"]);
Route::post('/logout', [AuthenticationController::class, "logout"]);
Route::post('/register', [AuthenticationController::class, "register"]);
// Admin - Category
Route::get('/categories', [CategoryController::class, "index"]);
Route::get('/categories/detail/{category:id}', [CategoryController::class, "getById"]);
Route::get('/categories/create', [CategoryController::class, "create"]);
Route::post('/categories/create', [CategoryController::class, "store"]);
Route::get('/categories/edit/{category:id}', [CategoryController::class, "edit"]);
Route::put('/categories/edit/{category:id}', [CategoryController::class, "update"]);
Route::delete('/categories/delete/{category:id}', [CategoryController::class, "destroy"]);
// Admin - Book
Route::get('/books', [BookController::class, "index"]);
Route::get('/books/detail/{book:id}', [BookController::class, "getById"]);
Route::get('/books/create', [BookController::class, "create"]);
Route::post('/books/create', [BookController::class, "store"]);
Route::get('/books/edit/{book:id}', [BookController::class, "edit"]);
Route::put('/books/edit/{book:id}', [BookController::class, "update"]);
Route::delete('/books/delete/{book:id}', [BookController::class, "destroy"]);
