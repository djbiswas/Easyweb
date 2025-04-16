<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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


Route::get('/allclear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'ok';
});



Route::resource('/registration', RegisterController::class);
Route::resource('/', HomeController::class);
Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/password', [ChangePasswordController::class, 'index']);
    Route::post('/password', [ChangePasswordController::class, 'update'])->name('password.update');

    Route::resource('/users', UserController::class);
    Route::get('/change_member_pass/{id}', [UserController::class, 'change_member_pass'])->name('change_member_pass');
    Route::PATCH('/member_pass_update/{id}', [UserController::class, 'member_pass_update'])->name('member_pass_update');
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');

    Route::resource('/users', UserController::class);

    Route::resource('pages', PageController::class);
    Route::resource('menus', MenuController::class)->only(['index', 'edit', 'update']);
    Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('/pages', PageController::class);
});

Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
