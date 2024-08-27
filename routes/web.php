<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', [CalculatorController::class,'showCalculatorPage'] );






Route::get('/index', function () {
    return view('my pages.index');
})->name('index');

Route::get('/services', function () {
    return view('my pages.services');
})->name('services');

Route::get('/gallery', function () {
    return view('my pages.gallery');
})->name('gallery');




Route::get('/digoy',function(){
    return view ("Araoarao");
});
Route::get('/digoy2',function(){
    return view ("Araoarao2");
})->name('cojie');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
