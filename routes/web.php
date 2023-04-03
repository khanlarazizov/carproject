<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project1;


Route::get('/', function () {
    return redirect('admin');
});


Route::get('admin', [\App\Http\Controllers\CustCont::class, 'admin'])->name('admin');

Route::any('carmenu', [\App\Http\Controllers\CustCont::class, 'carmenu'])->name('carmenu');

Route::post('carinsertPost', [\App\Http\Controllers\CustCont::class, 'insertcarPost'])->name('insertcarPost');


Route::get('updatecar.{id}', [\App\Http\Controllers\CustCont::class, 'updatecar'])->name('updatecar');
Route::post('updatecarPost.{id}', [\App\Http\Controllers\CustCont::class, 'updatecarPost'])->name('updatecarPost');


Route::get('cardelete.{id}', [\App\Http\Controllers\CustCont::class, 'cardelete'])->name('cardelete');



Route::get('admininsert', [\App\Http\Controllers\CustCont::class, 'admin1'])->name('admin1');
Route::post('admininsertPost', [\App\Http\Controllers\CustCont::class, 'insertPost'])->name('insertPost');



Route::get('updatecustomer.{id}', [\App\Http\Controllers\CustCont::class, 'updatecus'])->name('updatecus');
Route::post('updatecustomerPost.{id}', [\App\Http\Controllers\CustCont::class, 'updatecusPost'])->name('updatecusPost');


Route::get('delete.{id}', [\App\Http\Controllers\CustCont::class, 'customerdelete'])->name('customerdelete');

