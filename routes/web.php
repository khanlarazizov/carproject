<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project1;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;




//customers-menu
Route::get('/', [CustomerController::class, 'index'])->name('customers.index');

//customer-create
Route::get('customers.new', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers.newPost', [CustomerController::class, 'createPost'])->name('customers.createPost');

//customer-update
Route::get('customers.update.{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::post('customers.updatePost.{id}', [CustomerController::class, 'updatePost'])->name('customers.updatePost');

//customer-delete
Route::get('customers.delete.{id}', [CustomerController::class, 'delete'])->name('customers.delete');





//cars-menu
Route::any('carmenu', [CarController::class, 'carmenu'])->name('carmenu');
//car-create
Route::post('cars.newPost', [CarController::class, 'createPost'])->name('cars.createPost');

//car-update
Route::get('cars.update.{id}', [CarController::class, 'update'])->name('cars.update');
Route::post('cars.updatePost.{id}', [CarController::class, 'updatePost'])->name('cars.updatePost');

//car-delete
Route::get('cars.delete.{id}', [CarController::class, 'delete'])->name('cars.delete');




