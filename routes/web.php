<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ListLombaController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pages.client.index');
});

Route::get('/table-of-content', function () {
    return view('pages.client.list');
});

Route::get('/schedule', function () {
    return view('pages.client.schedule');
});

Route::get('/schedule/basketball-day-1', function () {
    return view('pages.client.basket.day1');
});

Route::get('/schedule/basketball-day-2', function () {
    return view('pages.client.basket.day2');
});

Route::get('/schedule/basketball-day-3', function () {
    return view('pages.client.basket.day3');
});

Route::get('/schedule/basketball-day-4', function () {
    return view('pages.client.basket.day4');
});

Route::get('/schedule/basketball-day-5', function () {
    return view('pages.client.basket.day5');
});

Route::get('/basketball-rules', function () {
    return view('pages.client.basket.rules');
});

Route::get('dashboard-login', [LoginController::class, 'index'])->name('admin');

Route::prefix('/')->group(function() {
    Route::redirect('login', 'dashboard-login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-page', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard-page')->group(function(){
        Route::get('/list-lomba', [ListLombaController::class, 'index'])->name('lomba.index');

        Route::get('/list-lomba/create', [ListLombaController::class, 'create'])->name('lomba.create');
        Route::post('/list-lomba/create', [ListLombaController::class, 'store'])->name('lomba.store');
    });
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/dashboard-page');
