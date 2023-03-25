<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;

Route::get('/',[AdminController::class, 'index'])->name('home');

// Category Controller //
Route::get('index/category', [CategoryController::class, 'index'])->name('index.category');
Route::get('create/category',[CategoryController::class, 'create'])->name('create.category');
Route::post('store/category',[CategoryController::class, 'store'])->name('store.category');
Route::get('delete/category/{id}', [CategoryController::class, 'delete'])->name('delete.category');
Route::get('show/category/{id}',[CategoryController::class, 'show'])->name('show.category');
Route::get('edit/category/{id}',[CategoryController::class, 'edit'])->name('edit.category');
Route::post('update/category/{id}',[CategoryController::class, 'update'])->name('update.category');

// subCategory Controller //

Route::get('sub-category/index',[SubCategoryController::class, 'index'])->name('subcategory.index');
Route::get('sub-category/create',[SubCategoryController::class, 'create'])->name('subcategory.create');
Route::post('sub-category/store',[SubCategoryController::class, 'store'])->name('subcategory.store');
Route::get('delete/sub-category/{id}', [SubCategoryController::class, 'delete'])->name('delete.subcategory');
Route::get('edit/sub-category/{id}',[SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('update/sub-category/{id}',[SubCategoryController::class, 'update'])->name('subcategory.update');

// Brand Controller //

Route::get('brand/create',[BrandController::class, 'create'])->name('create.brand');



