<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('productGrid');
});

Route::get('/sync',[\App\Http\Controllers\BigThreeItemController::class,'syncItems'])->name('sync');
