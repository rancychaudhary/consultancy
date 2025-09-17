<?php

// use App\Http\Controllers\admin\SettingController;
// use App\Http\Controllers\admin\BlogController;

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\CountryController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\EnquiryController;
use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\WhyChooseUsController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
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

    Route::resource('blog', BlogController::class);

    Route::resource('pages', PagesController::class);
    Route::get('/admin/pages', [PagesController::class, 'index'])->name('admin.pages.index');
    Route::get('/admin.pages/{pages}/edit', [PagesController::class, 'edit'])->name(name: 'admin.pages.edit');
    Route::put('/admin.pages/{pages}', [PagesController::class, 'update'])->name('admin.pages.update');

    Route::resource('team', TeamController::class);
    Route::get('/admin/team', [TeamController::class, 'index'])->name(name: 'admin.team.index');
    Route::get('/admin.team/{team}/edit', [TeamController::class, 'edit'])->name(name: 'admin.team.edit');
    Route::put('/admin.team/{team}', action: [TeamController::class, 'update'])->name('admin.team.update');
    Route::get('/admin.team/{team}', [TeamController::class, 'show'])->name('admin.team.show');

    Route::resource('service', ServiceController::class);
    Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service.index');
    Route::get('/admin.service/{service}/edit', [ServiceController::class, 'edit'])->name(name: 'admin.service.edit');
    Route::put('/admin.service/{service}', [ServiceController::class, 'update'])->name('admin.service.update');

    Route::resource('testimonial', TestimonialController::class);
    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name(name: 'admin.testimonial.index');
    Route::get('/admin.testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name(name: 'admin.testimonial.edit');
    Route::put('/admin.testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');

    Route::resource('course', CourseController::class);

    Route::resource(name: "enquiry", controller: EnquiryController::class);
    Route::get('/enquiry/{id}/pdf', [EnquiryController::class, 'generatePdf'])->name('enquiry.pdf');

    Route::resource('whychooseus', WhyChooseUsController::class);

    Route::resource('country', CountryController::class);
});

require __DIR__ . '/auth.php';
