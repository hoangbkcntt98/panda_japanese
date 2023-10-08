<?php

use App\Http\Controllers\ImportExcelTest;
use App\Http\Controllers\WordController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::inertia('dashboard', 'Dashboard');
Route::inertia('importData', 'ImportData');
Route::get('/token', function () {
    return csrf_token(); 
});

Route::prefix('word')->group(function () {
    Route::get('', [WordController::class, 'index'])->name('word.index');
});