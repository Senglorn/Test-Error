<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderDetailController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route for home page 'index'
Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');
// Route::put('/category/update', [CategoryController::class, 'destroy'])-> name('category.update');
// Route::get('/category/edit', [CategoryController::class, 'edit'])->name('category.edit');


Route::get('/', function () {
    return view('welcome');
});
