<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Models\News;

Route::get('/news-test', function () {

    News::create([
        'title' => 'İlk Haber',
        'content' => 'Tabbo Hotel yayında!',
        'image' => null,
    ]);

    return 'Haber eklendi.';
});
require __DIR__.'/auth.php';
