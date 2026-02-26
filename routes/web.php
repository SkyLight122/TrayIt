<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth', 'customer'])->group(function(){
//     Route::livewire('/product', 'pages::bakery.product')->name('product');
//     Route::livewire('/history', 'pages::bakery.history')->name('history');
//     Route::livewire('/aboutus', 'pages::bakery.about_us')->name('aboutus');
//     Route::livewire('/detail', 'pages::bakery.detail_product') -> name('detail');
// });
// Route::middleware(['auth', 'bakeryowner'])->group(function(){
//     Route::livewire('/dashboard', 'pages::owner_bakery.dashboard')->name('dashboard');
//     Route::livewire('/orders', 'pages::owner_bakery.orders')->name('orders');
//     Route::livewire('/customers', 'pages::owner_bakery.orders')->name('customers');
// });
// Route::middleware(['auth', 'admin'])->group(function(){

// });
// Route::middleware(['auth'])->group(function(){
//     Route::livewire('/mood', 'pages::preparation.mood')->name('mood');
//     Route::livewire('/portal', 'pages::preparation.portal')->name('portal');
//     Route::livewire('/createbakery', 'pages::admin.createbakery')->name('createbakery');
// });
// Route::middleware(['guest'])->group(function(){
//     Route::livewire('/login', 'pages::auth.login')->name('login');
//     Route::livewire('/register', 'pages::auth.register')->name('register');
//     Route::livewire('/', 'pages::guest.landing_page');
// });

Route::livewire('/product', 'pages::bakery.product')->name('product');
Route::livewire('/history', 'pages::bakery.history')->name('history');
Route::livewire('/aboutus', 'pages::bakery.about_us')->name('aboutus');
Route::livewire('/detail', 'pages::bakery.detail_product') -> name('detail');
Route::livewire('/dashboard', 'pages::owner_bakery.dashboard')->name('dashboard');
Route::livewire('/orders', 'pages::owner_bakery.orders')->name('orders');
Route::livewire('/customers', 'pages::owner_bakery.orders')->name('customers');
Route::livewire('/mood', 'pages::preparation.mood')->name('mood');
Route::livewire('/portal', 'pages::preparation.portal')->name('portal');
Route::livewire('/createbakery', 'pages::admin.createbakery')->name('createbakery');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/', 'pages::guest.landing_page');
Route::livewire('/sub', 'pages::guest.slider')->name('sub');


Route::livewire('/products', 'pages::bakery.product') -> name('products');
Route::livewire('/hpp', 'pages::owner_bakery.hpp') -> name('hpp');
Route::livewire('/logout', 'pages::owner_bakery.hpp') -> name('logout');
