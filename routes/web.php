<?php

// use App\Http\Controllers\admin\SettingController;

use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/testlogin', function () {
//     return view('auth.login');
// });
Route::get('/testlogin', function () {
    return view('auth.login');
});
Route::get('/testadmin', function () {
    return view('layouts.admin.master');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('setting', [SettingsController::class, 'edit'])->name('admin.setting.index');
    Route::post('setting', [SettingsController::class, 'update'])->name('admin.setting.update');
});


Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::resource('blogs', BlogController::class);
    // Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    // Route::get('/admin.blogs/{blog}/edit', [BlogController::class, 'edit'])->name(name: 'admin.blogs.edit');
    // Route::put('/admin.blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');


    Route::resource('pages', PagesController::class);
    Route::get('/admin/pages', [PagesController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin.pages/{pages}/edit', [PagesController::class, 'edit'])->name(name: 'admin.pages.edit');
    Route::put('/admin.pages/{pages}', [PagesController::class, 'update'])->name('admin.pages.update');




});

require __DIR__.'/auth.php';
