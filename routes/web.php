<?php

use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Auth\Register;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Livewire\Pages\Board\IndexPage;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('')->middleware(['guest'])->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', Login::class)->name('login');
});

Route::prefix('board')->middleware(['auth'])->group(function () {
    Route::get('/', IndexPage::class)->name('board.index');
});
