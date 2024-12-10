<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'title' => 'Homepage'
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About Us'
    ]);
});
Route::get('/collections', function () {
    return view('collections',[
        'title' => 'Collections'
    ]);
});
Route::get('/collections2', function () {
    return view('collections2',[
        'title' => 'Collections'
    ]);
});
Route::get('/collections3', function () {
    return view('collections3',[
        'title' => 'Collections'
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact Us'
    ]);
});
Route::get('/fragrances', function () {
    return view('fragrances',[
        'title' => 'Fragrances'
    ]);
});
Route::get('/product', function () {
    return view('product',[
        'title' => 'Product'
    ]);
});
Route::get('/store', function () {
    return view('store',[
        'title' => 'Store'
    ]);
});
