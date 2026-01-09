<?php

use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Auth\Register;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Livewire\Pages\Board\IndexPage;
use App\Livewire\Pages\Board\ShowPage;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('')->middleware(['guest'])->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', Login::class)->name('login');
});

Route::prefix('board')->name('board.')->middleware(['auth'])->group(function () {
    Route::get('/', IndexPage::class)->name('index');
    Route::get('/{board}', ShowPage::class)->name('show');
});
