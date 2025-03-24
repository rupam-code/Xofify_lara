<?php

use App\Http\Controllers\Add;
use App\Http\Controllers\Test;
use Illuminate\Support\Facades\Route;

Route::get('/',[Test::class,'index']);
Route::get('/product',[Test::class,'product'])->middleware("auth");
Route::get('/contact',[Test::class,'contact']);
Route::get('/about',[Test::class,'about']);
Route::get('/cart',[Test::class,'cart'])->middleware("auth");

Route::get('/sign_up',[Test::class,'sign_up']);
Route::post('/ins_sign_up',[Test::class,'ins_sign_up']);

Route::get('/login',[Test::class,'login'])->name('login');
Route::post('/check_login',[Test::class,'check_login']);

Route::get('/admin_login',[Test::class,'admin_login'])->name('admin_login');
Route::post('/admin_login_check',[Test::class,'admin_login_check']);

Route::get('/admin_pannel',[Test::class,'admin_pannel'])->middleware('auth',"admin");


Route::get('/logout',[Test::class,'logout']);

Route::get('/add_cartegory',[Add::class,'admin_add_cartegory']);
Route::post('/ins_add_cartegory',[Add::class,'ins_add_cartegory']);
Route::get('/select_category',[Add::class,'select_category']);
Route::get('/delete_cartegory/{id}',[Add::class,'delete_cartegory']);
Route::get('/edit_cartegory/{id}',[Add::class,'edit_cartegory']);
Route::post('/update_cartegory',[Add::class,'update_cartegory']);

Route::get('/add_product',[Add::class,'add_product']);
Route::post('/ins_add_product',[Add::class,'ins_add_product']);
Route::get('/select_product',[Add::class,'select_product']);
Route::get('/delete_product/{id}',[Add::class,'delete_product']);
Route::get('/edit_product/{id}',[Add::class,'edit_product']);
Route::post('/update_product',[Add::class,'update_product']);

Route::get('/one_product/{id}',[Add::class,'one_product']);

Route::post('/add_to_cart',[Add::class,'add_to_cart']);
Route::get('/cart_view',[Add::class,'cart_view'])->middleware("auth");


Route::put('/cart/update/{id}', [Add::class, 'update_cart'])->name('cart.update');
Route::delete('/cart/delete/{id}', [Add::class, 'delete_cart'])->name('cart.delete');





