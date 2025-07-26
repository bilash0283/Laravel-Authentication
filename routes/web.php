<?php

use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Vlog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category-create',[Category::class,'create'])->name('category_create');
    Route::post('/category-store',[Category::class,'store'])->name('category_store');
    Route::get('/category-manage',[Category::class,'category'])->name('category_manage');
    Route::get('/category-edit/{id}',[Category::class,'edit'])->name('category_edit');
    Route::post('/category-update/{id}',[Category::class,'cat_update'])->name('category_update');
    Route::get('/Category-Delete/{id}',[Category::class,'delete_cate'])->name('category_delete');

    Route::get('/vlog-create',[Vlog::class,'create_vlog'])->name('create_vlog');

});

require __DIR__.'/auth.php';

