<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TicketController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::post('/ticket', [TicketController::class, 'send'])->name('send');

Route::get('/service/ticket', [ServiceController::class, 'index'])->name('service.ticket');
Route::post('/service/ticket', [ServiceController::class, 'send'])->name('service.send');
