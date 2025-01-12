<?php

use App\Http\Controllers\RefbookController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [RefbookController::class, 'index'])->name('refbooks.index');
Route::get('/create', [RefbookController::class, 'create'])->name('refbooks.create');
Route::post('/store', [RefbookController::class, 'store'])->name('refbooks.store');
