<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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



Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('/home');
Route::get('/about', function () {
    return view('about');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/chefs', function () {
    return view('chefs');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin/dashboard');
     Route::get('/admin/reservations', [AdminController::class, 'reservations']);
      Route::get('/admin/contacts', [AdminController::class, 'contacts']);
       Route::post('/admin/reservation/{id}/status', [AdminController::class, 'updateStatus']);
});


require __DIR__.'/auth.php';
