<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContractController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{client}/pdf', [ClientController::class, 'generatePDF'])->name('clients.pdf');
