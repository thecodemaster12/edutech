<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'verified', 'admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Category
    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/categories', [AdminCategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/categories/{category}/edit', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/categories/{category}/update', [AdminCategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/categories/{category}/destroy', [AdminCategoryController::class, 'destroy'])->name('admin.category.destroy');
});

Route::prefix('teacher')->middleware(['auth', 'verified', 'teacher'])->group(function () {

    Route::get('/dashboard', function () {
        return view('teacher.dashboard');
    })->name('teacher.dashboard');
});

Route::prefix('student')->middleware(['auth', 'verified', 'student'])->group(function () {

    Route::get('/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');
});

require __DIR__ . '/auth.php';
