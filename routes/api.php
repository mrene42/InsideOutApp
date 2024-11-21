<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JournalController;

Route::get('/',[JournalController::class, 'index'])->name('apiHome');
Route::get('/journals/{id}',[JournalController::class, 'show'])->name('apiShow');
Route::delete('/journals/{id}',[JournalController::class, 'destroy'])->name('apiDestroy');
Route::post('/journals',[JournalController::class, 'store'])->name('apiStore');
Route::put('/journals/{id}',[JournalController::class, 'update'])->name('apiUpdate');
