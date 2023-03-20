<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/',[AdminController::class, 'index'])->name('home');

Route::get('list/category', [CategoryController::class, 'index'])->name('list.category');
Route::get('create/category',[CategoryController::class, 'create'])->name('create.category');
Route::post('store/category',[CategoryController::class, 'store'])->name('store.category');
Route::get('delete/category/{id}', [CategoryController::class, 'delete'])->name('delete.category');
Route::get('show/category/{id}',[CategoryController::class, 'show'])->name('show.category');
Route::get('edit/category/{id}',[CategoryController::class, 'edit'])->name('edit.category');
Route::post('update/category/{id}',[CategoryController::class, 'update'])->name('update.category');


