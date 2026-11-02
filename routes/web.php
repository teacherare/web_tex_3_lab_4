<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get(
    '/',
    [PortfolioController::class, 'home']
)->name('home');

Route::get(
    '/education',
    [PortfolioController::class, 'education']
)->name('edu');

Route::get(
    '/experience',
    [PortfolioController::class, 'experience']
)->name('exp');

Route::get(
    '/publications',
    [PortfolioController::class, 'publications']
)->name('pub');

Route::get(
    '/teaching',
    [PortfolioController::class, 'teaching']
)->name('teach');

Route::get(
    '/students',
    [PortfolioController::class, 'students']
)->name('stud');

Route::get(
    '/other',
    [PortfolioController::class, 'other']
)->name('other');

Route::get(
    '/connection',
    [PortfolioController::class, 'connection']
)->name('conn');

// formalar uchun routelar
Route::post(
    '/connection/xabar',
    [PortfolioController::class, 'xabarSaqla']
)->name('xabar.saqla');

Route::post(
    '/connection/baho',
    [PortfolioController::class, 'bahoSaqla']
)->name('baho.saqla');
