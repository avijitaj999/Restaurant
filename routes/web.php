<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemContorller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;
use App\Models\Reservation;

Route::get("/", [HomeController::class,'home']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

route::get('add_slider',[AdminController::class,'add_slider'])->middleware(['auth','admin']);
route::post('upload_slider',[AdminController::class,'upload_slider'])->middleware(['auth','admin']);
route::get('view_slider',[AdminController::class,'view_slider'])->middleware(['auth','admin']);
route::get('delete_slider/{id}',[AdminController::class,'delete_slider'])->middleware(['auth','admin']);


route::get('delete_item/{id}',[ItemContorller::class,'delete_item'])->middleware(['auth','admin']);
route::get('delete_category/{id}',[CategoryController::class,'delete_category'])->middleware(['auth','admin']);


route::get('edit_slider/{id}',[AdminController::class,'edit_slider'])->middleware(['auth','admin']);
route::post('edit__slider/{id}',[AdminController::class,'edit__slider'])->middleware(['auth','admin']);
route::get('view_category',[CategoryController::class,'view_category'])->middleware(['auth','admin']);
route::post('add_category',[CategoryController::class,'add_category'])->middleware(['auth','admin']);


route::get('index',[ItemContorller::class,'index'])->middleware(['auth','admin']);

route::get('create',[ItemContorller::class,'create'])->middleware(['auth','admin']);

route::post('add_item',[ItemContorller::class,'add_item'])->middleware(['auth','admin']);

Route::post('reservation', [ReservationController::class, 'reserves']);

route::get('table',[TableController::class,'index'])->middleware(['auth','admin']);

route::get('delete_table_data/{id}',[TableController::class,'delete_table_data'])->middleware(['auth','admin']);


route::get('status/{id}',[TableController::class,'status'])->middleware(['auth','admin']);

Route::post('update_reservation_status/{id}', [TableController::class, 'update_status'])->middleware(['auth', 'admin']);

