<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ListLombaController;
use App\Http\Controllers\ScheduleController;
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
    return view('welcome');
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
        Route::get('/list-lomba/{id}/edit', [ListLombaController::class, 'edit'])->name('lomba.edit');
        Route::post('/list-lomba/{id}/edit', [ListLombaController::class, 'update'])->name('lomba.update');
        Route::delete('/list-lomba/{id}/delete', [ListLombaController::class, 'delete'])->name('lomba.delete');

        Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
        Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
        Route::post('/schedule/create', [ScheduleController::class, 'store'])->name('schedule.store');


    });

});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/dashboard-page');
