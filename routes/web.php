<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Session;

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

Route::get('/', [ProductController::class, 'index']);

Route::get('/login', function () {
    return view('login');
})->middleware(['UserAuth']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/details/{id}', [ProductController::class, 'details']);
Route::post('/search', [ProductController::class, 'search']);
Route::post('/add-to-cart', [ProductController::class, 'addToCart']);
Route::get('/cartlist', [ProductController::class, 'cartlist']);
Route::get('/removecart/{id}', [ProductController::class, 'removecart']);

Route::get('/ordernow', [ProductController::class, 'ordernow']);
Route::post('/orderplace', [ProductController::class, 'orderPlace']);

Route::get('/myorders', [ProductController::class, 'myorders']);
Route::get('/register', function () {
    return view('register');
})->middleware(['UserAuth']);
Route::post('/register', [UserController::class, 'registerAuth'])->name('user.register');
