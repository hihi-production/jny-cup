<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Client\BandChampionController;
use App\Http\Controllers\Client\BasketBallChampionController;
use App\Http\Controllers\Client\BasketballController;
use App\Http\Controllers\Client\DanceChampionController;
use App\Http\Controllers\Client\FencingChampionController;
use App\Http\Controllers\Client\MuralChampionController;
use App\Http\Controllers\Client\ResultController;
use App\Http\Controllers\Client\SwimmingChampionController;
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

Route::get('/results', [ResultController::class, 'index'])->name('results');

Route::get('/sponsor', function() {
    return view('pages.client.sponsor');
})->name('sponsor');

Route::get('dashboard-login', [LoginController::class, 'index'])->name('admin');

Route::prefix('/')->group(function() {
    Route::redirect('login', 'dashboard-login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-page', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard-page')->group(function(){

        Route::get('/basketball-schedule', [BasketballController::class, 'list'])->name('basketball.index');
        Route::get('/basketball-schedule/create', [BasketballController::class, 'create'])->name('basketball.create');
        Route::post('/basketball-schedule/create', [BasketballController::class, 'store'])->name('basketball.store');
        Route::get('/basketball-schedule/{id}/edit', [BasketballController::class, 'edit'])->name('basketball.edit');
        Route::put('/basketball-schedule/{id}/edit', [BasketballController::class, 'update'])->name('basketball.update');

        Route::get('/basketball/champion', [BasketBallChampionController::class, 'index'])->name('basket.champion.index');
        Route::get('/basketball/champion/create', [BasketBallChampionController::class, 'create'])->name('basket.champion.create');
        Route::post('/basketball/champion/create', [BasketBallChampionController::class, 'store'])->name('basket.champion.store');
        Route::get('/basketball/champion/{id}/edit', [BasketBallChampionController::class, 'edit'])->name('basket.champion.edit');
        Route::put('/basketball/champion/{id}/edit', [BasketBallChampionController::class, 'update'])->name('basket.champion.update');

        Route::get('/fencing/champion', [FencingChampionController::class, 'index'])->name('fencing.champion.index');
        Route::get('/fencing/champion/create', [FencingChampionController::class, 'create'])->name('fencing.champion.create');
        Route::post('/fencing/champion/create', [FencingChampionController::class, 'store'])->name('fencing.champion.store');
        Route::get('/fencing/champion/{id}/edit', [FencingChampionController::class, 'edit'])->name('fencing.champion.edit');
        Route::put('/fencing/champion/{id}/edit', [FencingChampionController::class, 'update'])->name('fencing.champion.update');

        Route::get('/swimming/champion', [SwimmingChampionController::class, 'index'])->name('swimming.champion.index');
        Route::get('/swimming/champion/create', [SwimmingChampionController::class, 'create'])->name('swimming.champion.create');
        Route::post('/swimming/champion/create', [SwimmingChampionController::class, 'store'])->name('swimming.champion.store');
        Route::get('/swimming/champion/{id}/edit', [SwimmingChampionController::class, 'edit'])->name('swimming.champion.edit');
        Route::put('/swimming/champion/{id}/edit', [SwimmingChampionController::class, 'update'])->name('swimming.champion.update');

        Route::get('/mural/champion', [MuralChampionController::class, 'index'])->name('mural.champion.index');
        Route::get('/mural/champion/create', [MuralChampionController::class, 'create'])->name('mural.champion.create');
        Route::post('/mural/champion/create', [MuralChampionController::class, 'store'])->name('mural.champion.store');
        Route::get('/mural/champion/{id}/edit', [MuralChampionController::class, 'edit'])->name('mural.champion.edit');
        Route::put('/mural/champion/{id}/edit', [MuralChampionController::class, 'update'])->name('mural.champion.update');

        Route::get('/dance/champion', [DanceChampionController::class, 'index'])->name('dance.champion.index');
        Route::get('/dance/champion/create', [DanceChampionController::class, 'create'])->name('dance.champion.create');
        Route::post('/dance/champion/create', [DanceChampionController::class, 'store'])->name('dance.champion.store');
        Route::get('/dance/champion/{id}/edit', [DanceChampionController::class, 'edit'])->name('dance.champion.edit');
        Route::put('/dance/champion/{id}/edit', [DanceChampionController::class, 'update'])->name('dance.champion.update');

        Route::get('/band/champion', [BandChampionController::class, 'index'])->name('band.champion.index');
        Route::get('/band/champion/create', [BandChampionController::class, 'create'])->name('band.champion.create');
        Route::post('/band/champion/create', [BandChampionController::class, 'store'])->name('band.champion.store');
        Route::get('/band/champion/{id}/edit', [BandChampionController::class, 'edit'])->name('band.champion.edit');
        Route::put('/band/champion/{id}/edit', [BandChampionController::class, 'update'])->name('band.champion.update');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/home', '/dashboard-page');
