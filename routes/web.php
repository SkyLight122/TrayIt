<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/mood', 'pages::preparation.mood')->name('mood');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/portal', 'pages::preparation.portal')->name('portal');
Route::livewire('/landing', 'pages::guest.landing_page')->name('landing');
Route::livewire('/sub', 'pages::guest.slider')->name('sub');
Route::livewire('/home', 'pages::bakery.home')->name('home');
Route::livewire('/product', 'pages::bakery.product')->name('product');
Route::livewire('/history', 'pages::bakery.history')->name('history');
Route::livewire('/aboutus', 'pages::bakery.about_us')->name('aboutus');
Route::livewire('/dashboard', 'pages::owner_bakery.dashboard')->name('dashboard');
Route::livewire('/orders', 'pages::owner_bakery.orders')->name('orders');
Route::livewire('/customers', 'pages::owner_bakery.orders')->name('customers');
Route::livewire('/createbakery', 'pages::admin.createbakery')->name('createbakery');
