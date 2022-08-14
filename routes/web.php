<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\PerguruanTinggiController;

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
})->name('welcome');

Auth::routes();

Route::middleware(['auth', 'user-access:perguruan_tinggi'])->group(function () {
    Route::get('/perguruan-tinggi/home', [HomeController::class, 'perguruanTinggiHome'])->name('perguruan_tinggi.home');
    Route::get('/perguruan-tinggi/{id}/profile', [PerguruanTinggiController::class, 'edit'])->name('perguruan_tinggi.profile');
    Route::put('/perguruan-tinggi/update/{id}', [PerguruanTinggiController::class, 'update'])->name('perguruan_tinggi.update');
});

Route::middleware(['auth', 'user-access:industri'])->group(function () {
    Route::get('/industri/home', [HomeController::class, 'industriHome'])->name('industri.home');
    Route::get('/industri/{id}/profile', [IndustriController::class, 'edit'])->name('industri.profile');
    Route::put('/industri/update/{id}', [IndustriController::class, 'update'])->name('industri.update');
});

Route::middleware(['auth'])->group(function() {
    Route::get('/account', function () {
        return view('account');
    });
    
    Route::get('/submission', function () {
        return view('submission');
    });
    
    Route::get('/discussion', function () {
        return view('discussion');
    });
    
    Route::get('/information', function () {
        return view('information');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/login/perguruan-tinggi', function() {
    return view('auth.login');
})->name('loginauth');

Route::get('/login/industri', function() {
    return view('auth.login');
});