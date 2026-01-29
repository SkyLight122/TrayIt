<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::livewire ('/landing', 'pages::guest.landing_page') -> name('landing');
