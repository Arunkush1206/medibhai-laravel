<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Broker\Corporate;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::middleware('auth')->prefix('broker')->name('broker.')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/corporate/add', [Corporate::class, 'add_corporate'])->name('add_corporate');
    Route::get('/corporate/active-list', [Corporate::class, 'active_corporate_list'])->name('active_corporate_list');
    Route::get('/corporate/inactive-list', [Corporate::class, 'inactive_corporate_list'])->name('inactive_corporate_list');
});

Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
