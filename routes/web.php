<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index'])->name('dashboard');
Route::get('/deposit', [Home::class, 'deposit'])->name('deposit');
Route::get('/member', [Home::class, 'member'])->name('member');
