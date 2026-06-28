<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/create', [NewsController::class, 'create']);
Route::post('/news', [NewsController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Breeze
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return redirect('/admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';