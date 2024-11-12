<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;

Route::get('/dashboard',[Dashboard::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/products',[Dashboard::class,'products'])->name('products')->middleware('auth');
Route::get('/Create_newProduct',[Dashboard::class,'Create_newProduct'])->name('Create_newProduct')->middleware('auth');
Route::get('/shoproductdata',[Dashboard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashboard::class,'delete'])->name('delete')->middleware('auth');

Route::get('/edit/{id}',[Dashboard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update',[Dashboard::class,'update'])->name('update')->middleware('auth');
Route::get('/showproduct_details',[Dashboard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/create_new_details',[Dashboard::class,'create_new_details'])->name('createnewdet')->middleware('auth');
Route::get('/showcustomer',[Dashboard::class,'showcustomer'])->name('showcustomer')->middleware('auth');
Route::get('/deletecustumer',[Dashboard::class,'deletecustumer'])->name('deletecustumer')->middleware('auth');


Route::get('/',[Shopping::class,'index'])->name('landing');

Route::get('/PA',[Shopping::class,'PA'])->name('pa');
Route::get('/Pb',[Shopping::class,'Pb'])->name('pb');
Route::get('/Pc',[Shopping::class,'Pc'])->name('pc');
Route::get('/CART',[Shopping::class,'CART'])->name('CART');
Route::get('/loginui',[Shopping::class,'loginui'])->name('loginui');
Route::get('/logoutui',[Shopping::class,'logoutui'])->name('logoutui');
Route::post('/logincon',[Shopping::class,'logincon'])->name('logincon');
Route::get('/signupui',[Shopping::class,'signupui'])->name('signupui');
Route::post('/registerconf',[Shopping::class,'registerconf'])->name('registerconf');
Route::get('/productdetails/{id}',[Shopping::class,'productdetails'])->name('proddet');
Route::get('/add-to-cart/{productId}', [Shopping::class, 'add_to_cart'])->name('add_to_cart');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
