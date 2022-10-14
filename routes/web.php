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
use App\Http\Controllers\Auth\LoginController;

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

// Маршрут регистрации нового пользователя
Route::get('/registration', function () {
    if (Auth::check()) { // Если пользователь уже аутентифицирован, то на приват его
        return redirect(route('admin'));
    }
    return view('auth.register');
})->name('registration');

Route::post('/registration', [RegisterController::class, 'create'])->name('create');

Route::get('/login', function () {
    if (Auth::check()) { // Если пользователь уже аутентифицирован, то на приват его
        return redirect(route('admin'));
    }
    return view('auth.login'); // На страницу входа
})->name('login');


Route::get('/reception/ticket', [ReceptionController::class, 'index'])->name('reception.ticket');
Route::post('/reception/ticket', [ReceptionController::class, 'send'])->name('reception.send');

Route::get('/service/ticket', [ServiceController::class, 'index'])->name('service.ticket');
Route::post('/service/ticket', [ServiceController::class, 'send'])->name('service.send');

Route::get('/admin', [AdminContriller::class, 'index'])->name('admin');
Route::get('/admin/service', [AdminServiceContriller::class, 'index'])->middleware('auth')->name('admin.service');
Route::get('/admin/role', [AdminRoleContriller::class, 'index'])->name('admin.role');
Route::get('/admin/permission', [AdminPermissionContriller::class, 'index'])->name('admin.permission');
Route::get('/admin/user', [AdminUserContriller::class, 'index'])->name('admin.user');
