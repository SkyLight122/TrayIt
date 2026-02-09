<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/mood', 'pages::preparation.mood') -> name('mood');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
Route::livewire('/portal', 'pages::preparation.portal')->name('portal');
Route::livewire ('/landing', 'pages::guest.landing_page') -> name('landing');
Route::livewire ('/sub', 'pages::guest.slider') -> name('sub');