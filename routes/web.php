<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ReanCodeController;
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
    return view('portfolio.index');
});

Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);

Route::controller(MessageController::class)->group(function () {
    Route::post('/contact', 'Contact')->name('contact');
    Route::get('/reancode', 'ReanCode')->name('reancode');
});

Route::controller(ReanCodeController::class)->group(function () {
    Route::get('/html', 'HTML')->name('html');
    Route::get('/css', 'CSS')->name('css');
    Route::get('/bootstrap', 'BootStrap')->name('bootstrap');
    Route::get('/javascript', 'JavaScript')->name('javascript');
    Route::get('/jquery', 'JQuery')->name('jquery');
    Route::get('/php', 'PHP')->name('php');
    Route::get('/laravel', 'Laravel')->name('laravel');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard', 'Dashboard')->name('dashboard.index');
});

Route::resource('courses', CoursesController::class);