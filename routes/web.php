<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdoptionController;

// <====================== FRONTEND ROUTES ======================>
Route::get('/', [HomeController::class, 'home'])->name('web.home');
Route::get('/pets', [HomeController::class, 'pets'])->name('web.pets');
Route::get('/pets/{pet}', [HomeController::class, 'singlePet'])->name('web.single.pet');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('web.blogs');
Route::get('/single-blog/{blog}', [HomeController::class, 'singleBlog'])->name('web.single.blog');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('web.about-us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('web.contact-us');
Route::get('/pages/{slug}', [HomeController::class, 'singlePage'])->name('web.singlePage');
Route::post('/adoption/request', [HomeController::class, 'adoptionStore'])->name('web.adoption.store');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/user-dashboard', [HomeController::class, 'userDashboard'])->name('user-dashboard');
   
    Route::get('/profile-update', [HomeController::class, 'profileUpdate'])->name('profile.update');
    Route::patch('/profile', [HomeController::class, 'profileStore'])->name('profile.profileStore');
    Route::get('/password-change', [ProfileController::class, 'passwordChange'])->name('profile.password.change');
    Route::patch('/password-update', [HomeController::class, 'chengePassword'])->name('profile.password.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';