<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\AdoptionController;

// Route::get('/admin', function () {
//     return view('admin.pages.dashboard');
// });


Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('cities', CityController::class);
    Route::resource('pets', PetController::class);
    Route::resource('pages', PageController::class);
    Route::resource('tags', TagController::class);
    Route::get('general-setting', [AdminController::class, 'generalSetting'])->name('generalSetting');
    Route::patch('setting-update', [AdminController::class, 'general_settings_update'])->name('setting-update');
    Route::resource('subscribers', SubscribeController::class);
    Route::resource('adoption', AdoptionController::class);
    Route::post('adoption/status/{adoption}', [AdoptionController::class, 'status'])->name('adoption.status');
});
