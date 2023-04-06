<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserDashboardController;

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

Route::get('/', [WebsiteController::class, 'index']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/user-status-up/{id}', [AdminDashboardController::class, 'userStatus'])->name('user.status-up');
    Route::get('/dashboard/user-status-down/{id}', [AdminDashboardController::class, 'userStatsDown'])->name('user.status-down');
    Route::get('/dashboard/user-decline/{id}', [AdminDashboardController::class, 'decline'])->name('user.decline');
});


Route::get('/user/login', [UserAuthController::class, 'index'])->name('user.login');
Route::post('/user/login', [UserAuthController::class, 'login'])->name('user.login');

Route::get('/user/register', [UserAuthController::class, 'register'])->name('user.register');
Route::post('/user-create', [UserAuthController::class, 'userRegister'])->name('user.create');

Route::middleware('user')->group(function (){

    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    Route::post('/teacher/logout', [UserDashboardController::class, 'logout'])->name('teacher.logout');
});
