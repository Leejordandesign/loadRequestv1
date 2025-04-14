<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::where('item_number','=','807050')->get();
    return view('productGrid',['products'=>$products]);
});

Route::get('/sync',[\App\Http\Controllers\BigThreeItemController::class,'syncItems'])->name('sync');
Route::get('/syncItems',[\App\Http\Controllers\ProductController::class,'syncItems'])->name('sync');
