<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/admin/news', [AdminNewsController::class, 'index'])->middleware('auth');
Route::get('/admin/news', [AdminNewsController::class, 'index'])->middleware('auth');

Route::get('/admin/news/create', [AdminNewsController::class, 'create'])->middleware('auth');

Route::post('/admin/news', [AdminNewsController::class, 'store'])->middleware('auth');
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
Route::get('/admin/news/{news}/edit', [AdminNewsController::class, 'edit'])->middleware('auth');
Route::put('/admin/news/{news}', [AdminNewsController::class, 'update'])->middleware('auth');
Route::delete('/admin/news/{news}', [AdminNewsController::class, 'destroy'])->middleware('auth');
Route::get('/admin/users', [UserController::class, 'index'])->middleware('auth');
});

require __DIR__.'/auth.php';