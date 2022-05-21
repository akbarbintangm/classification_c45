<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/* use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register; */

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

Auth::routes();

/* Clear Cache */
Route::get('/reset', function () {
    $status1 = Artisan::call('route:clear');
    $status2 = Artisan::call('config:clear');
    $status3 = Artisan::call('cache:clear');
    $status4 = Artisan::call('view:clear');
    return redirect('/');
});

/* Login & Logout */
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('guest');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
    Route::get('/reset', [LoginController::class, 'reset'])->name('login.reset')->middleware('guest');
    Route::post('/reset', [LoginController::class, 'store'])->name('login.store');
});

/* Register */
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index')->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/verify', [RegisterController::class, 'verify'])->name('verify.index')->middleware('guest');
    Route::post('/verify', [RegisterController::class, 'verify_store'])->name('verify.store');
});

/* Route::middleware(['auth'])->group(function () { */
    /* Dashboard */
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/home', 'index')->name('home');
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/classification', 'classification')->name('classification');
    });
/* }); */
