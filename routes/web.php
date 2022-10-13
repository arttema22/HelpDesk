<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminServiceContriller;
use App\Http\Controllers\Admin\AdminRoleContriller;

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

Route::get('/reception/ticket', [ReceptionController::class, 'index'])->name('reception.ticket');
Route::post('/reception/ticket', [ReceptionController::class, 'send'])->name('reception.send');

Route::get('/service/ticket', [ServiceController::class, 'index'])->name('service.ticket');
Route::post('/service/ticket', [ServiceController::class, 'send'])->name('service.send');

Route::get('/admin/service', [AdminServiceContriller::class, 'index'])->name('admin.service');
Route::get('/admin/role', [AdminRoleContriller::class, 'index'])->name('admin.role');
