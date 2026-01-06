<?php

use App\Livewire\Pages\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('')->middleware(['guest'])->group(function () {
    Route::get('register', Register::class)->name('register');
});
