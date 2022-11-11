<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReceptionController;
use App\Http\Controllers\Admin\AdminServiceContriller;
use App\Http\Controllers\Admin\AdminRoleContriller;
use App\Http\Controllers\Admin\AdminPermissionContriller;
use App\Http\Controllers\Admin\AdminUserContriller;
use App\Http\Controllers\Admin\AdminContriller;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\AdminReceptionContriller;
use App\Http\Controllers\Admin\AdminPeopleContriller;
use App\Http\Controllers\Admin\AdminBuildingContriller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TicketController;
use App\Models\Message;

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

require __DIR__ . '/auth.php';


Route::get('/reception/ticket', [TicketController::class, 'index'])->name('reception.ticket');
Route::post('/reception/ticket', [TicketController::class, 'send'])->name('reception.send');
Route::get('/reception/status', [TicketController::class, 'status'])->name('reception.status');
Route::post('/reception/status', [TicketController::class, 'result'])->name('reception.result');



Route::get('/reload-captcha', [TicketController::class, 'reloadCaptcha']);





Route::get('/service/ticket', [ServiceController::class, 'index'])->name('service.ticket');
Route::post('/service/ticket', [ServiceController::class, 'send'])->name('service.send');

// Группа маршрутов Админка
Route::get('/admin', [AdminContriller::class, 'index'])->name('admin');
Route::get('/admin/building', [AdminBuildingContriller::class, 'index'])->name('admin.building');
Route::get('/admin/building/{id}', [AdminBuildingContriller::class, 'card'])->name('admin.building.card');

Route::get('/admin/people', [AdminPeopleContriller::class, 'index'])->name('admin.people');
Route::get('/admin/people/{id}', [AdminPeopleContriller::class, 'card'])->name('admin.people.card');
Route::post('/admin/people/{id}', [AdminPeopleContriller::class, 'send'])->name('admin.people.send');
Route::get('/admin/reception', [AdminReceptionContriller::class, 'index'])->name('admin.reception');
Route::get('/admin/reception/{id}', [AdminReceptionContriller::class, 'card'])->name('admin.reception.card');
Route::post('/admin/reception/{id}', [AdminReceptionContriller::class, 'answer'])->name('admin.answer');
Route::get('/admin/service', [AdminServiceContriller::class, 'index'])->name('admin.service');
Route::get('/admin/role', [AdminRoleContriller::class, 'index'])->name('admin.role');
Route::get('/admin/permission', [AdminPermissionContriller::class, 'index'])->name('admin.permission');
Route::get('/admin/user', [AdminUserContriller::class, 'index'])->name('admin.user');
