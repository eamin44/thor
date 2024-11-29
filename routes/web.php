<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HerosectionController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\TestimonialController;

Route::get('/', function () {
    return view('Frontend.pages.main');
});

Route::get('/dashboard', function () {
    return view('Admin/pages/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// frontend route

// Route::group(['prefix'=> 'frontend'], function () {
//     Route::get('/frontend', [FrontendController::class, 'index'])->name('myfrontend');
// });

// <= ########################## Hero section route ############################## =>
Route::group(['prefix' => 'herosection'], function () {
    Route::get('/manage', [HerosectionController::class, 'index'])->name('hero.manage');
    Route::get('/create', [HerosectionController::class, 'create'])->name('hero.create');
    Route::post('/store', [HerosectionController::class, 'store'])->name('hero.store');
    Route::get('/edit/{id}', [HerosectionController::class, 'edit'])->name('hero.edit');
    Route::post('/hero/update/{id}', [HerosectionController::class, 'update'])->name('hero.update');
    Route::delete('/hero/destroy/{id}', [HerosectionController::class, 'destroy'])->name('hero.destroy');
});

// <= ########################## Service section route ############################## =>
Route::group(['prefix' => 'service'], function () {
    Route::get('/manage', [ServiceController::class, 'index'])->name('service.manage');
    Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
});
// <= ########################## Destination section route ############################## =>
Route::group(['prefix' => 'destination'], function () {
    Route::get('/manage', [DestinationController::class, 'index'])->name('destination.manage');
    Route::get('/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('/store', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('/edit/{id}', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::post('/destination/update/{id}', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('/destination/destroy/{id}', [DestinationController::class, 'destroy'])->name('destination.destroy');
});
// <= ########################## hero section route ############################## =>
Route::group(['prefix' => 'booking'], function () {
    Route::get('/manage', [BookingController::class, 'index'])->name('booking.manage');
    Route::get('/create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/edit/{id}', [BookingController::class, 'edit'])->name('booking.edit');
    Route::post('/booking/update/{id}', [BookingController::class, 'update'])->name('booking.update');
    Route::delete('/booking/destroy/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
});
// <= ########################## hero section route ############################## =>
Route::group(['prefix' => 'testimonial'], function () {
    Route::get('/manage', [TestimonialController::class, 'index'])->name('testimonial.manage');
    Route::post('/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/update', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/destroy/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
