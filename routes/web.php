<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\BasketballController;
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
})->name('table-of-content');

Route::get('/schedule', function () {
    return view('pages.client.schedule');
})->name('schedule');

Route::get('/schedule/basketball', [BasketballController::class, 'index'])->name('basketball');

Route::get('/schedule/fenching', function() {
    return view('pages.client.fencing.index');
})->name('fencing');

Route::get('/schedule/swimming', function() {
    return view('pages.client.swimming.index');
})->name('swimming');

Route::get('/schedule/mural', function() {
    return view('pages.client.mural.index');
})->name('mural');

Route::get('/schedule/dance', function() {
    return view('pages.client.dance.index');
})->name('dance');

Route::get('/schedule/band', function() {
    return view('pages.client.band.index');
})->name('band');

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

        Route::get('/basketball-schedule', [BasketballController::class, 'list'])->name('basketball.index');
        Route::get('/basketball-schedule/create', [BasketballController::class, 'create'])->name('basketball.create');
        Route::post('/basketball-schedule/create', [BasketballController::class, 'store'])->name('basketball.store');
    });
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/dashboard-page');
