<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UniversityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Country routes
Route::get('countries/trashed', [CountryController::class, 'trashed'])->name('countries.trashed');
Route::get('countries/restore/{id}', [CountryController::class, 'restore'])->name('countries.restore');
Route::get('countries/trash/{id}', [CountryController::class, 'trash'])->name('countries.trash');

// University routes
Route::get('universities/trashed', [UniversityController::class, 'trashed'])->name('universities.trashed');
Route::get('universities/restore/{id}', [UniversityController::class, 'restore'])->name('universities.restore');
Route::get('universities/trash/{id}', [UniversityController::class, 'trash'])->name('universities.trash');

// Resource routes for countries and universities
Route::resource('countries', CountryController::class)->middleware(['auth', 'verified']);
Route::resource('universities', UniversityController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
