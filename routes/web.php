<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Operator;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
// Admin - Borrowing
Route::get('/borrowings', [BorrowingController::class, "index"]);
Route::get('/borrowings/create', [BorrowingController::class, "create"]);
Route::post('/borrowings/create', [BorrowingController::class, "store"]);
Route::put('/borrowings/edit/{borrowing:id}', [BorrowingController::class, "update"]);
// Admin - User
Route::get('/users', [UserController::class, "index"]);
Route::get('/users/detail/{user:id}', [UserController::class, "getById"]);
Route::get('/users/create', [UserController::class, "create"]);
Route::post('/users/create', [UserController::class, "store"]);
Route::get('/users/edit/{user:id}', [UserController::class, "edit"]);
Route::put('/users/edit/{user:id}', [UserController::class, "update"]);
Route::delete('/users/delete/{user:id}', [UserController::class, "destroy"]);
// Admin - Operators
Route::get('/operators', [OperatorController::class, "index"]);
Route::get('/operators/detail/{user:id}', [OperatorController::class, "getById"]);
Route::get('/admins/detail/{user:id}', [OperatorController::class, "getById"]);
Route::get('/admins/create', [OperatorController::class, "createAdmin"]);
Route::post('/admins/create', [OperatorController::class, "store"]);
Route::get('/operators/create', [OperatorController::class, "create"]);
Route::post('/operators/create', [OperatorController::class, "store"]);
Route::get('/operators/edit/{user:id}', [OperatorController::class, "edit"]);
Route::put('/operators/edit/{user:id}', [OperatorController::class, "update"]);
Route::get('/admins/edit/{user:id}', [OperatorController::class, "editAdmin"]);
Route::put('/admins/edit/{user:id}', [OperatorController::class, "update"]);
Route::delete('/admins/delete/{user:id}', [OperatorController::class, "destroy"]);
Route::delete('/operators/delete/{user:id}', [OperatorController::class, "destroy"]);
// Admin - Report
Route::get('/reports/generate/all',[BorrowingController::class, 'reportAll']);
Route::get('/report/generate/{borrowing:id}',[BorrowingController::class, 'reportOne']);
// User - Collection
Route::get('/collections', [CollectionController::class, "index"]);
Route::get('/collections/detail/{user:id}', [CollectionController::class, "getById"]);
Route::get('/collections/create', [CollectionController::class, "create"]);
Route::post('/collections/create', [CollectionController::class, "store"]);
Route::get('/collections/edit/{user:id}', [CollectionController::class, "edit"]);
Route::put('/collections/edit/{user:id}', [CollectionController::class, "update"]);
Route::delete('/collections/delete/{user:id}', [CollectionController::class, "destroy"]);
// User - View
Route::get('/landing', [ViewController::class, "landing"]);
Route::get('/user-dashboard', [ViewController::class, "dashboard"]);
Route::get('/user/books/detail/{book:id}', [ViewController::class, "getById"]);
Route::get('/user/books', [ViewController::class, "index"]);
Route::post('/user/books/search', [ViewController::class, "searchBook"]);
Route::post('/user/books/category/search', [ViewController::class, "searchCategory"]);
// User - Review
Route::post('/reviews/create/{book:id}', [ReviewController::class, "store"]);
Route::get('/reviews/edit/{review:id}', [ReviewController::class, "edit"]);
Route::put('/reviews/edit/{review:id}', [ReviewController::class, "update"]);
Route::delete('/reviews/delete/{review:id}', [ReviewController::class, "destroy"]);
// User - Collection
Route::get('/user/collections', [CollectionController::class, "index"]);
Route::post('/collections/create/{book:id}', [CollectionController::class, "store"]);
Route::delete('/collections/delete/{id}', [CollectionController::class, "destroy"]);
// User -Profile
Route::get('/user/profile/{user:id}', [ProfileController::class, "getById"]);
Route::get('/user/profile/edit/{user:id}', [ProfileController::class, "edit"]);
Route::put('/user/profile/edit/{user:id}', [ProfileController::class, "update"]);
// Route::delete('/user/profile/delete/{user:id}', [ProfileController::class, "destroy"]);
