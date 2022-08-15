<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\PerguruanTinggiController;
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



Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/login/perguruan-tinggi', function () {
        return view('auth.login');
    })->name('login.perguruan_tinggi');

    Route::get('/login/industri', function () {
        return view('auth.login');
    })->name('login.industri');
    
    Route::get('/register/perguruan-tinggi', function () {
        return view('auth.register');
    })->name('register.perguruan_tinggi');

    Route::get('/register/industri', function () {
        return view('auth.register');
    })->name('register.industri');
});

Auth::routes();

Route::middleware(['auth', 'user-access:perguruan_tinggi'])->group(function () {
    Route::get('/perguruan-tinggi/home', [HomeController::class, 'perguruanTinggiHome'])->name('perguruan_tinggi.home');
    Route::get('/perguruan-tinggi/{id}/profile', [PerguruanTinggiController::class, 'edit'])->name('perguruan_tinggi.profile');
    Route::put('/perguruan-tinggi/update/{id}', [PerguruanTinggiController::class, 'update'])->name('perguruan_tinggi.update');
    Route::get('/perguruan-tinggi/submission/{id}', [PerguruanTinggiController::class, 'submissionPage'])->name('perguruan_tinggi.submission');
    Route::post('/perguruan-tinggi/submission/{id}', [PerguruanTinggiController::class, 'submission'])->name('perguruan_tinggi.submission.send');
});

Route::middleware(['auth', 'user-access:industri'])->group(function () {
    Route::get('/industri/home', [HomeController::class, 'industriHome'])->name('industri.home');
    Route::get('/industri/{id}/profile', [IndustriController::class, 'edit'])->name('industri.profile');
    Route::put('/industri/update/{id}', [IndustriController::class, 'update'])->name('industri.update');
    Route::get('/industri/submission/{id}', [IndustriController::class, 'submissionPage'])->name('industri.submission');
    Route::post('/industri/submission/{id}', [IndustriController::class, 'submission'])->name('industri.submission.send');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/submission', function () {
        return view('submission');
    })->name('submission');

    Route::get('/discussion', function () {
        return view('discussion');
    });

    Route::get('/information', function () {
        return view('information');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
