<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home'); // Atualiza para usar a nova view "home"
});
