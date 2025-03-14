<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.index');
})->name('produk.index');

Route::get('/gelang', function () {
    return view('gelang.gelang');
})->name('gelang.gelang');

Route::get('/skincare', function () {
    return view('skincare.skincare');
})->name('skincare.skincare');

Route::get('/baju', function () {
    return view('baju.baju');
})->name('baju.baju');

Route::get('/jilbab', function () {
    return view('jilbab.jilbab');
})->name('jilbab.jilbab');